<?php

namespace App\Http\Controllers;

use App\Models\Pest;
use Illuminate\Http\Request;

class PestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pests = Pest::all();
        return view('pest.index', compact('pests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        # Validation
        $request->validate([
            'crop' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            'comment' => ['required', 'string', 'max:255']
        ]);

        $pest = new Pest();
        $pest->crop = $request->crop;
        $pest->name = $request->name;
        $pest->location = $request->location;
        $pest->level = $request->level;
        $pest->comment = $request->comment;
        $pest->save();

        return redirect()->route('pest.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pest $pest)
    {
        return view('pest.show', compact('pest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pest $pest)
    {
        return view('pest.edit', compact('pest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pest $pest)
    {
        # Validation
        $request->validate([
            'crop' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            'comment' => ['required', 'string', 'max:255']
        ]);

        $pest->crop = $request->crop;
        $pest->name = $request->name;
        $pest->location = $request->location;
        $pest->level = $request->level;
        $pest->comment = $request->comment;
        $pest->save();

        return redirect()->route('pest.show', $pest);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pest $pest)
    {
        $pest->delete();
        return redirect()->route('pest.index');
    }
}
