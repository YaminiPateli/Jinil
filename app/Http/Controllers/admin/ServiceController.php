<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->get('search');

        $service = Service::with('category')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%");
            })
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('admin.service.service-list', compact('service','search'));
    }


    public function create()
    {
        $categories = ServiceCategory::all();
        return view('admin.service.service-add', compact('categories'));
    }


    public function store(Request $request)
    {

        $front_image = null;

        if ($request->hasFile('front_image')) {

            $file = $request->file('front_image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('service'), $filename);

            $front_image = $filename;
        }

        Service::create([

            'category_id' => $request->category_id,
            'title' => $request->title,
            'url' => $request->url,
            'name' => $request->name,
            'front_image' => $front_image,
            'short_description' => $request->short_description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,

            'scope_section' => $request->scope_section,
            'whychoose_section' => $request->whychoose_section,
            'process_section' => $request->process_section,

        ]);

        return redirect()->route('service.index')
            ->with('success','Service Created Successfully');
    }



    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $categories = ServiceCategory::all();

        return view('admin.service.service-edit',
            compact('service','categories'));
    }



    public function update(Request $request,$id)
    {

        $service = Service::findOrFail($id);

        $front_image = $service->front_image;

        if ($request->hasFile('front_image')) {

            $file = $request->file('front_image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('service'), $filename);

            $front_image = $filename;
        }

        $service->update([

            'category_id' => $request->category_id,
            'title' => $request->title,
            'url' => $request->url,
            'name' => $request->name,
            'front_image' => $front_image,
            'short_description' => $request->short_description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,

            'scope_section' => $request->scope_section,
            'whychoose_section' => $request->whychoose_section,
            'process_section' => $request->process_section,

        ]);

        return redirect()->route('service.index')
            ->with('success','Service Updated Successfully');
    }



    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        if($service->front_image){

            $path = public_path('service/'.$service->front_image);

            if(file_exists($path)){
                unlink($path);
            }

        }

        $service->delete();

        return redirect()->route('service.index')
            ->with('success','Service Deleted Successfully');
    }
}