<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service', compact('services'));
    }

    public function front_view($id)
    {
        $servicedata = Service::findOrFail($id);
        return view('service', compact('servicedata'));
    }

    public function create()
{
    return view('admin.service_add'); // for add form
}

    public function edit($id)
    {   try {
         $service = Service::findOrFail($id);
    return view('admin.service_add', compact('service'));
    } catch (ModelNotFoundException $e) {
        return redirect()->route('feature.list')->with('error', 'Feature not found.');
    }
    }

    public function store(Request $request)
{
    $request->validate([
        'service_name' => 'required|string|max:255',
        'service_description' => 'required|string',
        'status' => 'required|in:0,1',
        'service_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $imagePath = null;
    if ($request->hasFile('service_image')) {
        $imagePath = $request->file('service_image')->store('services', 'public');
    }

    $data = $request->only('service_name', 'service_description', 'status');
    if ($imagePath) {
        $data['service_image'] = $imagePath;
    }

    if ($request->filled('service_id')) {
       // dd($data);
        try {
            $service = Service::findOrFail($request->service_id);

            // Delete old image if new one is uploaded
            if ($request->hasFile('service_image') && $service->service_image) {
                File::delete(public_path('storage/' . $service->service_image));
            }

            $service->update($data);

            return redirect()->route('service.index')->with('success', 'Service updated successfully.');

        } catch (ModelNotFoundException $e) {
            return redirect()->route('service.index')->with('error', 'Service not found.');
        }
    } else {
       try {
       // dd($data); // before Service::create($data);

    Service::create($data);
    return redirect()->route('service.index')->with('success', 'Service added successfully.');
} catch (\Exception $e) {
    return back()->with('error', 'Failed: ' . $e->getMessage());
}
    }
}

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        if ($service->service_image) {
            File::delete(public_path('storage/' . $service->service_image));
        }
        $service->delete();
        return redirect()->back()->with('success', 'Service deleted successfully.');
    }
}
