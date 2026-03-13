<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use DB;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $product = Product::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);
        return view('admin.product.product-list', compact('product','search'));
    }

    public function create()
    {
        $categories = Category::whereNull('deleted_at')->get();
        return view('admin.product.product-add', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ], [
            'title.required' => 'Please Enter the Blog name.',
        ]);
        
        $post = new Product;
        $post->category_id = $request->category_id;
        $post->title = $request->get('title');
        $post->name = $request->get('name');
        $post->short_description = $request->get('short_description');
        $post->url = $request->get('url');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');
 
        if($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('Product/front_image');
            $file->move($path, $filename);
            $post->front_image = $filename;
        }  
        $post->save();
         return redirect()->route('product.index')
                        ->with('success','Product created successfully');
        
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::whereNull('deleted_at')->get();

        return view('admin.product.product-edit', compact('product','categories'));
    }
    public function update(Request $request, $id)
    {
        $post = Product::find($id);
        
        $post->category_id = $request->category_id;
        $post->title = $request->get('title');
        $post->name = $request->get('name');
        $post->short_description = $request->get('short_description');
        $post->url = $request->get('url');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');

        if($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('Product/front_image');
            $file->move($path, $filename);
            $post->front_image = $filename;
        }  
       
        $post->save();
        return redirect()->route('product.index')->with('success','Product updated successfully');
        
    }

    

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
        $product->delete();
        return redirect()->back()->with('success', 'Your Product Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Product not found!');
    }
}