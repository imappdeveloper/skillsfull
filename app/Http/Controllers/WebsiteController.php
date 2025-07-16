<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
class WebsiteController extends Controller
{
    public function index()
    {
        $website = Website::first(); // get first (only) row
        return view('admin.setting', compact('website'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'website_name' => 'required|string|max:255',
            'website_email' => 'nullable|email',
        ]);

        $website = Website::first(); // check if already inserted

        if ($website) {
            // Update
            $website->update($request->all());
        } else {
            // Create
            Website::create($request->all());
        }

        return redirect()->back()->with('success', 'Website info saved successfully!');
    }
}
