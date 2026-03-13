<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Industry;
use App\Models\IndCategory;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $search = $request->get('search');

        $industry = Industry::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.industry.industry-list', compact('industry', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = IndCategory::whereNull('deleted_at')->get();
        return view('admin.industry.industry-add', compact('categories'));
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
                $file->move(public_path('industryImage'), $fileName);
                $industry = [
                    'category_id' => $request->category_id,
                    'title' => $request->title, 
                    'description' => $request->description, 
                    'url' => $request->url,
                    'image'=>$fileName,
                ];
                Industry::create($industry);
            }
        }
        
        return redirect()->route('industry.index')
                        ->with('success','Industry created successfully');
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
        $industry = Industry::find($id);
        $categories = IndCategory::whereNull('deleted_at')->get();

        return view('admin.industry.industry-edit', compact('industry','categories'));
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
            $file->move(public_path('industryImage'), $fileName);
            $industry = Industry::find($id);
            $industry->title = $request->title;
            $industry->category_id = $request->category_id;
            $industry->description = $request->description;
            $industry->url = $request->url;
            $industry->image = $fileName;
            $industry->save();
        }else{
            $industry = Industry::find($id);
            $industry->title = $request->title;
            $industry->category_id = $request->category_id;
            $industry->description = $request->description;
            $industry->url = $request->url;
            $industry->save();
        }


        return redirect()->route('industry.index')->with('success','Industry updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $industry = Industry::findOrFail($id);
        $industry->delete(); 
        return redirect()->route('industry.index')->with('success','Industry deleted successfully');
    }
}
