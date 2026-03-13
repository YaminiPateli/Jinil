<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndCategory;

class IndCategoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $indcategory = IndCategory::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('indcategory', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.indcategory.indcategory-list', compact('indcategory','search'));
    }

    public function create()
    {
        return view('admin.indcategory.indcategory-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'indcategory' => 'required',
        ],[
            'indcategory.required' => 'Please enter a indcategory.',
        ]);

        IndCategory::create([
            'indcategory' => $request->indcategory,
            'cat_description' => $request->cat_description,
            'url' => $request->url
        ]);
        return redirect()->route('indcategory.index')
            ->with('success','indcategory created successfully');
    }

    public function edit($id)
    {
        $indcategory = IndCategory::findOrFail($id);
        return view('admin.indcategory.indcategory-edit', compact('indcategory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'indcategory' => 'required',
        ],[
            'indcategory.required' => 'Please enter a indcategory.',
        ]);

        $indcategory = IndCategory::findOrFail($id);

        $indcategory->update([
            'indcategory' => $request->indcategory,
            'cat_description' => $request->cat_description,
            'url' => $request->url
        ]);
        return redirect()->route('indcategory.index')
            ->with('success','indcategory updated successfully');
    }

    public function destroy($id)
    {
        $indcategory = IndCategory::findOrFail($id);
        $indcategory->delete();

        return redirect()->route('indcategory.index')
            ->with('success','indcategory deleted successfully');
    }
}