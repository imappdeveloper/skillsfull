<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
    public function index()
    {
        // $trainings = Training::all();
        // return view('admin.training', compact('trainings'));
        $trainings = Training::orderBy('id', 'desc')->paginate(5); // 10 items per page
    return view('admin.training', compact('trainings'));
    }

     public function front_view($id)
    {
        $trainnigdata = Training::findOrFail($id);
        return view('training', compact('trainnigdata'));
    }

    public function create()
    {
        return view('admin.training_add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'type' => 'nullable|string',
            'fees' => 'nullable|numeric',
            'duration' => 'nullable|string',
            'start_date' => 'nullable|date',
            'hours' => 'nullable|string',
            'status' => 'required|boolean',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('training_images', 'public');
        }

        Training::create($data);
        return redirect()->route('training.index')->with('success', 'Training added.');
    }

    public function edit($id)
    {
        $training = Training::findOrFail($id);
        return view('admin.training_add', compact('training'));
    }

    public function update(Request $request, $id)
    {
        $training = Training::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'type' => 'nullable|string',
            'fees' => 'nullable|numeric',
            'duration' => 'nullable|string',
            'start_date' => 'nullable|date',
            'hours' => 'nullable|string',
            'status' => 'required|boolean',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('training_images', 'public');
        }

        $training->update($data);
        return redirect()->route('training.index')->with('success', 'Training updated.');
    }

    public function destroy($id)
    {
        $training = Training::findOrFail($id);
        $training->delete();
        return redirect()->route('training.index')->with('success', 'Training deleted.');
    }
}
