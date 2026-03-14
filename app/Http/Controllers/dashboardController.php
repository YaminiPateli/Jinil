<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\IndCategory;
use App\Models\Industry;
use App\Models\Certificate;
use App\Models\ServiceRequest;
use App\Mail\SendContactMailToUser;
use App\Mail\SendContactMailToAdmin; 


class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        return view('auth.login');
    }
    public function admin(){
        return view('admin.admin');
    }
    public function index()
    {  
        return view('front.dashboard');
    }
    public function about()
    {   
        $metatitle = "";
        $metadescription = "";
        return view('front.about', compact('metatitle', 'metadescription'));
    }

    public function contact()
    {   
        $metatitle = "";
        $metadescription = "";
        $countries = DB::table('countries')->select('id','name')->get();
        $states = DB::table('states')->select('id','name')->get();
        return view('front.contact', compact('metatitle', 'metadescription', 'countries', 'states'));
    }

    public function blogs()
    {
        $metatitle = "";
        $metadescription = "";
        $blogs = Blog::whereNull('deleted_at')->orderBy('id', 'desc')->get();
        return view('front.blogs',compact('metatitle','metadescription','blogs'));
    }

    public function blogsdetail($url)
    {
        $blogs = Blog::whereNull('deleted_at')->orderBy('id', 'desc')->get();
        $blogsdetail = Blog::whereNull('deleted_at')->where('url', $url)->first();
        $metatitle = $blogsdetail->meta_title;
        $metadescription = $blogsdetail->meta_description;
        return view('front.blogdetail',compact('metatitle', 'metadescription','blogs','blogsdetail'));
    }

    public function download()
    {
        $metatitle = "";
        $metadescription = "";

        $certificate = Certificate::whereNull('deleted_at')
                        ->orderBy('id', 'desc')
                        ->get();

        $categories = Certificate::whereNull('deleted_at')
                        ->select('cat_title')
                        ->distinct()
                        ->pluck('cat_title');

        return view('front.download', compact(
            'metatitle',
            'metadescription',
            'certificate',
            'categories'
        ));
    }
    public function faq()
    {
        $metatitle = "";
        $metadescription = "";
         $faqs = Faq::whereNull('deleted_at')->get();
        return view('front.faqs',compact('metatitle', 'metadescription', 'faqs'));
    } 
    public function installation()
    {
        $metatitle = "";
        $metadescription = "";
         $faqs = Faq::whereNull('deleted_at')->get();
        return view('front.installation',compact('metatitle', 'metadescription', 'faqs'));
    } 
    public function aftersales()
    {
        $metatitle = "";
        $metadescription = "";
         $faqs = Faq::whereNull('deleted_at')->get();
        return view('front.after-sales',compact('metatitle', 'metadescription', 'faqs'));
    } 
    // public function service($url)
    // {
    //     $service = Service::where('url', $url)->firstOrFail();

    //     $metatitle       = $service->meta_title       ?? $service->title;
    //     $metadescription = $service->meta_description ?? $service->short_description;

    //     return view('front.service-detail', compact(
    //         'service',
    //         'metatitle',
    //         'metadescription'
    //     ));
    // }
    public function industry($url)
    {
        $category = IndCategory::whereNull('deleted_at')
                    ->where('url', $url)
                    ->firstOrFail();
    
        $industries = Industry::whereNull('deleted_at')
                        ->where('category_id', $category->id)
                        ->get();
    
        $metatitle = $category->indcategory;
        $metadescription = $category->cat_description;
    
        return view('front.industries', compact(
            'category',
            'industries',
            'metatitle',
            'metadescription'
        ));
    }
    public function product($url)
    {
        $category = Category::whereNull('deleted_at')
                    ->where('url', $url)
                    ->firstOrFail();
    
        $productlist = Product::whereNull('deleted_at')
                        ->where('category_id', $category->id)
                        ->get();
    
        $metatitle = $category->indcategory;
        $metadescription = $category->cat_description;
    
        return view('front.productlisting', compact(
            'category',
            'productlist',
            'metatitle',
            'metadescription'
        ));
    }
    public function contactstore(Request $request)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:255',
            'company_name'   => 'required|string|max:255',
            'full_phone'     => 'required|string',
            'email'          => 'required|email',
            'state'          => 'required|string',
            'city'           => 'required|string',
            'message'        => 'nullable|string',
            'simple_captcha' => 'required|integer',
            'captcha_sum'    => 'required|integer',
        ]);

        if ($validated['simple_captcha'] != $validated['captcha_sum']) {
            return response()->json([
                'status' => 'error',
                'errors' => ['simple_captcha' => 'Captcha answer is incorrect.']
            ]);
        }

        if (!preg_match('/^\+\d{7,15}$/', $validated['full_phone'])) {
            return response()->json([
                'status' => 'error',
                'errors' => ['full_phone' => 'Please enter a valid phone number.']
            ]);
        }

        try {
            $contact = Contact::create([
                'name'         => $validated['name'],
                'company_name' => $validated['company_name'],
                'contact'      => $validated['full_phone'],
                'email'        => $validated['email'],
                'state'        => $validated['state'],
                'city'         => $validated['city'],
                'message'      => $validated['message'] ?? null,
            ]);

            // Google Sheets and emails (optional)
            $contactData = [
                'form_type'    => 'Contact Form',
                'name'         => $validated['name'],
                'company_name' => $validated['company_name'],
                'contact'      => $validated['full_phone'],
                'email'        => $validated['email'],
                'state'        => $validated['state'],
                'city'         => $validated['city'],
                'message'      => $validated['message'] ?? '',
                'date'         => now()->format('Y-m-d H:i:s'),
            ];

            // Google Apps Script URL
            $sheetUrl = 'https://script.google.com/macros/s/YOUR_SCRIPT_ID/exec';
            Http::timeout(30)
                ->withHeaders(['Content-Type' => 'application/json'])
                ->post($sheetUrl, $contactData);

            Mail::to($validated['email'])->send(new SendContactMailToUser($contactData));
            Mail::to('webdeveloper10.intelliworkz@gmail.com')->send(new SendContactMailToAdmin($contactData));

            return response()->json([
                'status' => 'success',
                'redirect' => route('thankyou') // redirect URL
            ]);

        } catch (\Exception $e) {
            \Log::error('Contact form error: '.$e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong. Please try again later.'
            ]);
        }
    }
 public function installationstore(Request $request)
{
    $validator = \Validator::make($request->all(), [
        'name'           => 'required|string|max:255',
        'company_name'   => 'required|string|max:255',
        'full_phone'     => 'required|string',
        'email'          => 'required|email',
        'state'          => 'required|string',
        'city'           => 'required|string',
        'message'        => 'nullable|string',
        'simple_captcha' => 'required|integer',
        'captcha_sum'    => 'required|integer',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'errors' => $validator->errors()
        ], 422);
    }

    $validated = $validator->validated();

    if ($validated['simple_captcha'] != $validated['captcha_sum']) {
        return response()->json([
            'status' => 'error',
            'errors' => ['simple_captcha' => ['Captcha answer is incorrect.']]
        ], 422);
    }

    if (!preg_match('/^\+\d{7,15}$/', $validated['full_phone'])) {
        return response()->json([
            'status' => 'error',
            'errors' => ['full_phone' => ['Please enter a valid phone number.']]
        ], 422);
    }

    try {
        \App\Models\ServiceRequest::create([
            'name' => $validated['name'],
            'company_name' => $validated['company_name'],
            'contact' => $validated['full_phone'],
            'email' => $validated['email'],
            'state' => $validated['state'],
            'city' => $validated['city'],
            'message' => $validated['message'] ?? null,
        ]);

        return response()->json([
            'status' => 'success',
            'redirect' => route('thankyou')
        ]);

    } catch (\Exception $e) {
        \Log::error('Service form error: '.$e->getMessage());
        return response()->json([
            'status' => 'error',
            'message' => 'Something went wrong. Please try again later.'
        ]);
    }
}
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 
}