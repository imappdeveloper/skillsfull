<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class FeatureController extends Controller
{
    // Show add form (for new feature)
    public function create()
    {
        return view('admin.feature_add'); // No $feature variable
    }

    // Show edit form (with existing data)
    public function edit($id)
    {
       try {
        $feature = Feature::findOrFail($id);
        return view('admin.feature_add', compact('feature'));
    } catch (ModelNotFoundException $e) {
        return redirect()->route('feature.list')->with('error', 'Feature not found.');
    }
    }

    // Save or update
   public function store(Request $request)
{
    $request->validate([
        'feature_heading' => 'required|string|max:255',
        'feature_description' => 'required|string',
        'status' => 'required|boolean',
    ]);

    if ($request->filled('feature_id')) {
        try {
            $feature = Feature::findOrFail($request->feature_id);
            $feature->update($request->only('feature_heading','icon','feature_description', 'status'));
            return redirect()->route('feature.list')->with('success', 'Feature updated successfully!');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('feature.list')->with('error', 'Feature not found.');
        }
    } else {
        Feature::create($request->only('feature_heading','icon','feature_description', 'status'));
        return redirect()->route('feature.list')->with('success', 'Feature added successfully!');
    }
}

    // Show list
    public function index()
    {
        try {
        $features = Feature::all();
        return view('admin.feature', compact('features'));
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
    }

    // Delete
    public function destroy($id)
    {
        Feature::destroy($id);
        return redirect()->back()->with('success', 'Feature deleted successfully!');
    }
}
