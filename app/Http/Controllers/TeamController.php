<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams', compact('teams'));
    }

    public function front_view()
    {
        $teams = Team::all();
        return view('team', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_employee' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $team = new Team();
        $team->name_employee = $request->name_employee;
        $team->designation_employee = $request->designation_employee;
        $team->fb_link = $request->fb_link;
        $team->insta_link = $request->insta_link;
        $team->linked_link = $request->linked_link;

        // Image Upload
        if ($request->hasFile('image')) {
            $team->image = $request->file('image')->store('team_images', 'public');
        }

        $team->save();
        return redirect()->route('teams.index')->with('success', 'Team member added.');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team_add', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $request->validate([
            'name_employee' => 'required',
            'image' => 'nullable|image',
        ]);

        $team->name_employee = $request->name_employee;
        $team->fb_link = $request->fb_link;
        $team->insta_link = $request->insta_link;
        $team->linked_link = $request->linked_link;

        if ($request->hasFile('image')) {
            $team->image = $request->file('image')->store('team_images', 'public');
        }

        $team->save();
        return redirect()->route('teams.index')->with('success', 'Team member updated.');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Team member deleted.');
    }
}
