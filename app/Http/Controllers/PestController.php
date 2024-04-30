<?php

namespace App\Http\Controllers;

use App\Models\Pest;
use App\Models\Record;
use Illuminate\Http\Request;

class PestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);

        $pest = new Pest();
        $pest->name = $request->name;
        $pest->description = $request->description;
        $pest->save();

        return redirect()->route('record.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pest $pest)
    {
        $records = Record::where('pest_id', $pest->id)->get();
        return view('pest.show', compact('pest', 'records'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pest $pest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pest $pest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pest $pest)
    {
        //
    }
}
