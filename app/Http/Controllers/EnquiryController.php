<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Jobs\SendEnquiryNotification;
class EnquiryController extends Controller
{
    public function index()
{
    $enquiries = Enquiry::all();
    return view('admin.enquiries', compact('enquiries'));
}

public function edit($id)
{
    $enquiry = Enquiry::findOrFail($id);
    return view('admin.update_status_enquiries', compact('enquiry'));
}
public function store(Request $request)
    {
       // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|string|max:20',
            'type' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);
try {
    $enquiry=Enquiry::create($validated);
    SendEnquiryNotification::dispatch($enquiry);
    return redirect()->back()->with('success', 'Your message has been sent successfully!');
} catch (\Exception $e) {
    dd($e->getMessage()); // This will show if something failed
}

    }

public function update(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:pending,resolved,closed',
    ]);

    $enquiry = Enquiry::findOrFail($id);
    $enquiry->status = $request->status;
    $enquiry->save();

    return redirect()->route('enquiry.index')->with('success', 'Status updated successfully!');
}
}
