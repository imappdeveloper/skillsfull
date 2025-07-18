<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Training;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::with('training')->orderBy('id', 'desc')->paginate(10);
        return view('admin.topics', compact('topics'));
    }

    public function create()
    {
        $trainings = Training::all();
        return view('admin.topics_add', compact('trainings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'training_id' => 'required|exists:trainings,id',
            'topic_name' => 'required|string|max:255',
            'topic_description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        Topic::create($request->all());

        return redirect()->route('topics.index')->with('success', 'Topic added successfully.');
    }

    public function edit(Topic $topic)
    {
        $trainings = Training::all();
        return view('admin.topics_add', compact('topic', 'trainings'));
    }

    public function update(Request $request, Topic $topic)
    {
        $request->validate([
            'training_id' => 'required|exists:trainings,id',
            'topic_name' => 'required|string|max:255',
            'topic_description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        $topic->update($request->all());

        return redirect()->route('topics.index')->with('success', 'Topic updated successfully.');
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect()->route('topics.index')->with('success', 'Topic deleted successfully.');
    }
}
