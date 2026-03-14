<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServiceCategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $servicecategory = ServiceCategory::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('servicecategory', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.servicecategory.servicecategory-list', compact('servicecategory','search'));
    }

    public function create()
    {
        return view('admin.servicecategory.servicecategory-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'servicecategory' => 'required',
        ],[
            'servicecategory.required' => 'Please enter a Category.',
        ]);

        ServiceCategory::create([
            'servicecategory' => $request->servicecategory,
            'cat_description' => $request->cat_description,
            'url' => $request->url
        ]);
        return redirect()->route('servicecategory.index')
            ->with('success','Category created successfully');
    }

    public function edit($id)
    {
        $servicecategory = ServiceCategory::findOrFail($id);
        return view('admin.servicecategory.servicecategory-edit', compact('servicecategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'servicecategory' => 'required',
        ],[
            'servicecategory.required' => 'Please enter a Category.',
        ]);

        $servicecategory = ServiceCategory::findOrFail($id);

        $servicecategory->update([
            'servicecategory' => $request->servicecategory,
            'cat_description' => $request->cat_description,
            'url' => $request->url
        ]);
        return redirect()->route('servicecategory.index')
            ->with('success','Category updated successfully');
    }

    public function destroy($id)
    {
        $servicecategory = ServiceCategory::findOrFail($id);
        $servicecategory->delete();

        return redirect()->route('servicecategory.index')
            ->with('success','Category deleted successfully');
    }
}