<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $category = Category::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('category', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.category.category-list', compact('category','search'));
    }

    public function create()
    {
        return view('admin.category.category-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
        ],[
            'category.required' => 'Please enter a Category.',
        ]);

        Category::create([
            'category' => $request->category,
            'cat_description' => $request->cat_description,
            'url' => $request->url
        ]);
        return redirect()->route('category.index')
            ->with('success','Category created successfully');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.category-edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
        ],[
            'category.required' => 'Please enter a Category.',
        ]);

        $category = Category::findOrFail($id);

        $category->update([
            'category' => $request->category,
            'cat_description' => $request->cat_description,
            'url' => $request->url
        ]);
        return redirect()->route('category.index')
            ->with('success','Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')
            ->with('success','Category deleted successfully');
    }
}