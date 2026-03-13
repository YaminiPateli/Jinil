<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::with('category')->latest()->get();
        return view('admin.service.service-index',compact('services'));
    }

    public function create()
    {
        $categories = ServiceCategory::all();
        return view('admin.service.service-add',compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'url'=>'required|unique:services,url'
        ]);

        $service = new Service();

        $service->category_id = $request->category_id;
        $service->title = $request->title;
        $service->url = $request->url;
        $service->name = $request->name;
        $service->short_description = $request->short_description;
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;

        if($request->hasFile('front_image')){
            $image = time().'.'.$request->front_image->extension();
            $request->front_image->move(public_path('service/front_image'),$image);
            $service->front_image = $image;
        }

        $service->save();

        return redirect()->route('service.index')->with('success','Service Created Successfully');

    }


    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $categories = ServiceCategory::all();

        return view('admin.service.service-edit',compact('service','categories'));
    }


    public function update(Request $request, $id)
    {

        $service = Service::findOrFail($id);

        $request->validate([
            'title'=>'required',
            'url'=>'required|unique:services,url,'.$id
        ]);

        $service->category_id = $request->category_id;
        $service->title = $request->title;
        $service->url = $request->url;
        $service->name = $request->name;
        $service->short_description = $request->short_description;
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;

        if($request->hasFile('front_image')){

            if($service->front_image && file_exists(public_path('service/front_image/'.$service->front_image))){
                unlink(public_path('service/front_image/'.$service->front_image));
            }

            $image = time().'.'.$request->front_image->extension();
            $request->front_image->move(public_path('service/front_image'),$image);

            $service->front_image = $image;
        }

        $service->save();

        return redirect()->route('service.index')->with('success','Service Updated Successfully');

    }


    public function destroy($id)
    {

        $service = Service::findOrFail($id);

        if($service->front_image && file_exists(public_path('service/front_image/'.$service->front_image))){
            unlink(public_path('service/front_image/'.$service->front_image));
        }

        $service->delete();

        return redirect()->route('service.index')->with('success','Service Deleted Successfully');

    }

}