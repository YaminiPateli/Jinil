<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $certificate = Certificate::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%")
                    ->orWhere('cat_title', 'LIKE', "%$search%");
            })
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('admin.certificate.certificate-list', compact('certificate', 'search'));
    }

    public function create(){
        return view('admin.certificate.certificate-add');
    }

    public function store(Request $request){
        
        $validatedData = $request->validate(
            [
                'cat_title' => 'required',
                'title' => 'required',
                'files' => 'required|mimes:pdf',
            ],
            [
                'cat_title.required' => 'Please Select a Title.',
                'title.required' => 'Please enter a Title.',
                'files.required' => 'Please upload a file.',
                'files.mimes' => 'Only PDF files are allowed.',
            ]
        );
        // dd($request->all());
        if(isset($request->files) && !empty($request->files)){
            if ($request->hasFile('files')) {
                $file = $request->file('files'); // Get the uploaded file
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('certificateFiles'), $fileName);
                $certificate = [
                    'cat_title' => $request->cat_title, 
                    'title' => $request->title, 
                    'description' => $request->description, 
                    'files'=>$fileName,
                ];
                Certificate::create($certificate);
            }
        }
        
        return redirect()->route('certificate.index')
                        ->with('success','Certificates created successfully');
    }

    public function edit($id){
        $certificate = Certificate::find($id);
        return view('admin.certificate.certificate-edit',compact('certificate'));
    }

    public function update(Request $request, $id){
        
        $validatedData = $request->validate(
            [
                'cat_title' => 'required',
                'title' => 'required',
                'files' => 'mimes:pdf',
            ],
            [
                'cat_title.required' => 'Please Select a Title.',
                'title.required' => 'Please enter a Title.',
                'files.mimes' => 'Only PDF files are allowed.',
            ]
        );
        // dd($request->all());
        if ($request->hasFile('files')) {
            $file = $request->file('files'); // Get the uploaded file
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('certificateFiles'), $fileName);
            $certificate = Certificate::find($id);
            $certificate->cat_title = $request->cat_title;
            $certificate->title = $request->title;
            $certificate->description = $request->description;
            $certificate->files = $fileName;
            $certificate->save();
        }else{
            $certificate = Certificate::find($id);
            $certificate->cat_title = $request->cat_title;
            $certificate->title = $request->title;
            $certificate->description = $request->description;
            $certificate->save();
        }
        
        
        return redirect()->route('certificate.index')->with('success','Certificate updated successfully');
    }

    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);
        $certificate->delete(); 
        return redirect()->route('certificate.index')->with('success','Certificate deleted successfully');
    }

    
}