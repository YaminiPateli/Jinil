<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\CaseStudy;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        $casestudy = CaseStudy::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.casestudy.casestudy-list', compact('casestudy', 'search'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.casestudy.casestudy-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'title' => 'required',
            ],
            [
                'title.required' => 'Please enter a Title.',
             ]
        );

        if(isset($request->image) && !empty($request->image)){
            if ($request->hasFile('image')) {
                $file = $request->file('image'); 
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('casestudyImage'), $fileName);
                $casestudy = [
                    'title' => $request->title, 
                    'short_description' => $request->short_description,
                    'quote_description' => $request->quote_description,
                    'image'=>$fileName,
                ];
                CaseStudy::create($casestudy);
            }
        }
        
        return redirect()->route('casestudy.index')
                        ->with('success','CaseStudy created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $casestudy = CaseStudy::find($id);
        return view('admin.casestudy.casestudy-edit',compact('casestudy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'title' => 'required',              
            ],
            [
                'title.required' => 'Please enter a Title.',               
            ]
        );
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('casestudyImage'), $fileName);
            $casestudy = CaseStudy::find($id);
            $casestudy->title = $request->title;
            $casestudy->short_description = $request->short_description;
            $casestudy->quote_description = $request->quote_description;
            $casestudy->image = $fileName;
            $casestudy->save();
        }else{
            $casestudy = CaseStudy::find($id);
            $casestudy->title = $request->title;
            $casestudy->short_description = $request->short_description;
            $casestudy->quote_description = $request->quote_description;
            $casestudy->save();
        }


        return redirect()->route('casestudy.index')->with('success','CaseStudy updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $casestudy = CaseStudy::findOrFail($id);
        $casestudy->delete(); 
        return redirect()->route('casestudy.index')->with('success','CaseStudy deleted successfully');
    }
}
