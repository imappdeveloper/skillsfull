<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\File;
class PortfolioController extends Controller
{
    // List all portfolios
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio', compact('portfolios'));
    }

    // Show form to create new
    public function create()
    {
        return view('admin.portfolio_add');
    }

    // Store new
    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('portfolio', 'public');
        }

        Portfolio::create($data);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio created successfully');
    }

    // Show form to edit
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio_add', compact('portfolio'));
    }

    // Update existing
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $data = $request->validate([
            'type' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($portfolio->image) {
                File::delete(public_path('storage/' . $portfolio->image));
            }
            $data['image'] = $request->file('image')->store('portfolio', 'public');
        }

        $portfolio->update($data);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio updated successfully');
    }

    // Delete
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        if ($portfolio->image) {
            File::delete(public_path('storage/' . $portfolio->image));
        }
        $portfolio->delete();

        return redirect()->route('portfolio.index')->with('success', 'Portfolio deleted successfully');
    }
}
