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

        $category = ServiceCategory::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('category', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.servicecategory.servicecategory-list', compact('category','search'));
    }

    public function create()
    {
        return view('admin.servicecategory.servicecategory-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
        ],[
            'category.required' => 'Please enter a Category.',
        ]);

        ServiceCategory::create([
            'category' => $request->category,
            'cat_description' => $request->cat_description,
            'url' => $request->url
        ]);
        return redirect()->route('servicecategory.index')
            ->with('success','Category created successfully');
    }

    public function edit($id)
    {
        $category = ServiceCategory::findOrFail($id);
        return view('admin.servicecategory.servicecategory-edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
        ],[
            'category.required' => 'Please enter a Category.',
        ]);

        $category = ServiceCategory::findOrFail($id);

        $category->update([
            'category' => $request->category,
            'cat_description' => $request->cat_description,
            'url' => $request->url
        ]);
        return redirect()->route('servicecategory.index')
            ->with('success','Category updated successfully');
    }

    public function destroy($id)
    {
        $category = ServiceCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('servicecategory.index')
            ->with('success','Category deleted successfully');
    }
}