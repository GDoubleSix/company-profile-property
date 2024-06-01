<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::all();

        return view('agents', compact('agents'));
    }

    public function create()
    {
        return view('create-agent');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Agent::create($request->all());
        return redirect()->route('agents.index');
    }

    public function edit(string $id)
    {
        $agent = Agent::find($id);
    }
}
