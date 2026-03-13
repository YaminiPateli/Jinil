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
        return view('front.contact', compact('metatitle', 'metadescription'));
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
    public function service()
    {
        $metatitle = "";
        $metadescription = "";
         $faqs = Faq::whereNull('deleted_at')->get();
        return view('front.service',compact('metatitle', 'metadescription', 'faqs'));
    } 
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
        // Validation
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'company_name'  => 'required|string|max:255',
            'contact' => 'required|numeric|digits_between:10,15',
            'email'         => 'required|email|max:255',
            'message'       => 'nullable|string|max:1000',
        ]);

        // Phone format validation
        if (!preg_match('/^\+\d{7,15}$/', $contact)) {
            return back()
                ->withErrors(['contactnumber' => 'Please enter a valid phone number.'])
                ->withInput();
        }

        // Save contact to DB (optional)
        $contact = Contact::create([
            'name'         => $validated['name'],
            'company_name' => $validated['company_name'],
            'contact'      => $validated['contact'],
            'email'        => $validated['email'],
            'message'      => $validated['message'] ?? null,
        ]);

        // Prepare data for Google Sheets
        $contactData = [
            'form_type'    => 'Contact Form',
            'name'         => $validated['name'],
            'company_name' => $validated['company_name'],
            'contact'      => $validated['contact'],
            'email'        => $validated['email'],
            'message'      => $validated['message'] ?? '',
            'date'         => now()->format('Y-m-d H:i:s'),
        ];

        // Google Apps Script URL
        $sheetUrl = 'https://script.google.com/macros/s/AKfycbx2vKHdWFK0b-rhRBRHg_80Sd5j3atmdbQpwyPipR_g-TahDHT3XxOD2J3lbaGlzkuN/exec'; // <--- Replace with your deployed script URL

        try {
            // Send POST request to Google Sheets
            $response = Http::timeout(30)
                ->withHeaders(['Content-Type' => 'application/json'])
                ->post($sheetUrl, $contactData);

            if ($response->successful()) {
                $responseData = $response->json();
                if (isset($responseData['status']) && $responseData['status'] === 'success') {
                    Log::info('Data successfully sent to Google Sheets', [
                        'email' => $validated['email'],
                        'response' => $responseData
                    ]);
                } else {
                    Log::warning('Google Sheets returned an error', [
                        'response' => $responseData,
                        'email' => $validated['email']
                    ]);
                }
            } else {
                Log::error('Google Sheets API request failed', [
                    'status' => $response->status(),
                    'body'   => $response->body(),
                    'email'  => $validated['email']
                ]);
            }

            // Send Mail (optional)
            Mail::to($validated['email'])->send(new SendContactMailToUser($contactData));
            Mail::to('webdeveloper10.intelliworkz@gmail.com')->send(new SendContactMailToAdmin($contactData));

            return redirect()->route('thankyou')->with('success', 'Your message has been sent successfully.');

        } catch (\Exception $e) {
            Log::error('Error sending data to Google Sheets or email: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again later.');
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