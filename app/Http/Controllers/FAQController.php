<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ; 

class FAQController extends Controller
{
    public function index(Request $request)
{
    $search = $request->get('search');

    // Perform the search based on the search value
    $faqs = FAQ::where('faq_question', 'like', "%$search%")
                ->orWhere('faq_answer', 'like', "%$search%")
                ->paginate(10);

    if ($request->ajax()) {
        // If the request is an AJAX request, return the filtered results as a JSON response
        return response()->json([
            'view' => view('faqs.index', compact('faqs'))->render(),
            'pagination' => $faqs->links()->toHtml(),
        ]);
    }

    return view('faqs.index', compact('faqs'));
}

    public function create()
    {
        return view('faqs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        FAQ::create($validatedData);

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully');
    }

    public function edit(FAQ $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    public function update(Request $request, FAQ $faq)
    {
        $validatedData = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq->update($validatedData);

        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully');
    }

    public function destroy(FAQ $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully');
    }
}
