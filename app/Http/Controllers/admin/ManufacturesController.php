<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacture;

class ManufacturesController extends Controller
{
    

    public function index(Request $request)
    {
        $search = $request->search;

        $manufactures = Manufacture::when($search, function ($query, $search) {
            $query->where('title', 'like', "%{$search}%");
        })
        ->orderBy('id', 'desc')
        ->paginate(10);

        return view('admin.manufacture.manufacture-list', compact('manufactures','search'));
    }

    public function create()
    {
        return view('admin.manufacture.manufacture-add'); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [                
                'title' => 'required',
                'image' => 'required',
            ],
            [
                'title.required' => 'Please enter a Title.',
                'image.required' => 'Please upload the file.',
            ]
        );

        $manufactures = new Manufacture();
        $manufactures->title = $request->title;

        // Image upload
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->move(public_path('manufactureImage'), $filename);
            $manufactures->image = $filename;
        }

        $manufactures->save();
        return redirect()->route('manufactures.index')->with('success','Manufacture added successfully.');
    }

    public function edit($id)
    {
        $manufactures = Manufacture::findOrFail($id);
        
        return view('admin.manufacture.manufacture-edit', compact('manufactures'));
    }
    public function update(Request $request, $id)
    {
         $validatedData = $request->validate(
            [                
                'title' => 'required',
                'image' => 'nullable',
            ],
            [
                'title.required' => 'Please enter a Title.',
                //'image.required' => 'Please upload the file.',
            ]
        );

        $manufactures = Manufacture::findOrFail($id);
        $manufactures->title = $request->title;

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->move(public_path('manufactureImage'), $filename);
            $manufactures->image = $filename;
        }

        $manufactures->save();
        return redirect()->route('manufactures.index')->with('success','Manufacture updated successfully.');
    }

    public function destroy($id)
    {
        $manufactures = Manufacture::findOrFail($id);
        $manufactures->delete(); 
        return redirect()->back()->with('success','Manufacture deleted successfully.');
    }
}
