<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Clientel;

class ClientelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        $clientel = Clientel::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.clientel.clientel-list', compact('clientel', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientel.clientel-add');
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
                $file->move(public_path('clientelImage'), $fileName);
                $clientel = [
                    'title' => $request->title, 
                    'image'=>$fileName,
                ];
                Clientel::create($clientel);
            }
        }
        
        return redirect()->route('clientel.index')
                        ->with('success','Clientel created successfully');
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
        $clientel = Clientel::find($id);
        return view('admin.clientel.clientel-edit',compact('clientel'));
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
            $file->move(public_path('clientelImage'), $fileName);
            $clientel = Clientel::find($id);
            $clientel->title = $request->title;
            $clientel->image = $fileName;
            $clientel->save();
        }else{
            $clientel = Clientel::find($id);
            $clientel->title = $request->title;
            $clientel->save();
        }


        return redirect()->route('clientel.index')->with('success','Clientel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientel = Clientel::findOrFail($id);
        $clientel->delete(); 
        return redirect()->route('clientel.index')->with('success','Clientel deleted successfully');
    }
}
