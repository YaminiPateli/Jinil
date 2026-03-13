<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use DB;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $faq = Faq::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);
        return view('admin.faq.faq-list', compact('faq','search'));
    }

    public function create()
    {
        return view('admin.faq.faq-add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Please Enter the faq name.',
        ]);
        
        $faqTitles = $request->faq_title ?? [];
        $faqDescriptions = $request->faq_description ?? [];
    
        $title_description = [];
        foreach ($faqTitles as $index => $title) {
            if (empty(trim(strip_tags($title))) || empty(trim(strip_tags($faqDescriptions[$index] ?? '')))) {
        continue;
        }
            $title_description[] = [
                'faq_title' => $title,
                'faq_description' => $faqDescriptions[$index],
            ];
        }

        $post = new Faq;
        
        $post->name = $request->get('name');
        $post->title_description = $title_description;
        $post->save();
         return redirect()->route('faq.index')
                        ->with('success','Faq created successfully');
        
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('admin.faq.faq-edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $post = Faq::find($id);
        $faqTitles = $request->faq_title ?? [];
            $faqDescriptions = $request->faq_description ?? [];
        
            $title_description = [];
            foreach ($faqTitles as $index => $title) {
                if (empty(trim(strip_tags($title))) || empty(trim(strip_tags($faqDescriptions[$index] ?? '')))) {
        continue;
    }
                $title_description[] = [
                    'faq_title' => $title,
                    'faq_description' => $faqDescriptions[$index],
                ];
            }
       
        $post->name = $request->get('name');
        $post->title_description = $title_description;
        $post->save();
        return redirect()->route('faq.index')->with('success','Faq updated successfully');
        
    }

    

    public function destroy($id)
    {
        $faq = Faq::find($id);
        if ($faq) {
        $faq->delete();
        return redirect()->back()->with('success', 'Your Faq Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Faq not found!');
    }
}