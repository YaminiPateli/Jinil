<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search', '');

        $services = Service::with('category')
            ->when($search, fn($q) => $q->where('title', 'LIKE', "%{$search}%"))
            ->latest()
            ->paginate(10);

        return view('admin.service.service-list', compact('services', 'search'));
    }

    public function create()
    {
        $categories = ServiceCategory::latest()->get();
        return view('admin.service.service-add', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'url'               => 'required|string|max:255|unique:services,url',
            'category_id'       => 'nullable|exists:service_categories,id',
            'front_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('front_image')) {
            $imageName = time() . '.' . $request->front_image->getClientOriginalExtension();
            $request->front_image->move(public_path('service'), $imageName);
        }

        Service::create([
            'category_id'               => $request->category_id,
            'title'                     => $request->title,
            'url'                       => $request->url,
            'name'                      => $request->name,
            'front_image'               => $imageName,
            'short_description'         => $request->short_description,
            'meta_title'                => $request->meta_title,
            'meta_description'          => $request->meta_description,
            'commissioning_description' => $request->commissioning_description,
            'scope_section'             => $request->scope_section ?? [],
            'process_section'           => $request->process_section ?? [],
            'stats_section'             => $request->stats_section ?? [],
        ]);

        return redirect()->route('service.index')
            ->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service     = Service::findOrFail($id);
        $categories  = ServiceCategory::latest()->get();

        return view('admin.service.service-edit', compact('service', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'url'               => 'required|string|max:255|unique:services,url,' . $id,
            'category_id'       => 'nullable|exists:service_categories,id',
            'front_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imageName = $service->front_image;

        if ($request->hasFile('front_image')) {
            if ($imageName && File::exists(public_path('service/' . $imageName))) {
                File::delete(public_path('service/' . $imageName));
            }
            $imageName = time() . '.' . $request->front_image->getClientOriginalExtension();
            $request->front_image->move(public_path('service'), $imageName);
        }

        $service->update([
            'category_id'               => $request->category_id,
            'title'                     => $request->title,
            'url'                       => $request->url,
            'name'                      => $request->name,
            'front_image'               => $imageName,
            'short_description'         => $request->short_description,
            'meta_title'                => $request->meta_title,
            'meta_description'          => $request->meta_description,
            'commissioning_description' => $request->commissioning_description,
            'scope_section'             => $request->scope_section ?? [],
            'process_section'           => $request->process_section ?? [],
            'stats_section'             => $request->stats_section ?? [],
        ]);

        return redirect()->route('service.index')
            ->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        if ($service->front_image && File::exists(public_path('service/' . $service->front_image))) {
            File::delete(public_path('service/' . $service->front_image));
        }

        $service->delete();

        return redirect()->route('service.index')
            ->with('success', 'Service deleted successfully.');
    }
}