<?php

namespace App\Http\Controllers;

use App\Models\plagueAppearance;
use Illuminate\Http\Request;

class PlagueAppearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plagueAppearances = plagueAppearance::all();
        return view('plagueAppearance.index', compact('plagueAppearances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plagueAppearance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # Validation
        $request->validate([
            'crop' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255']
        ]);

        $plagueAppearance = new plagueAppearance();
        $plagueAppearance->crop = $request->crop;
        $plagueAppearance->name = $request->name;
        $plagueAppearance->location = $request->location;
        $plagueAppearance->level = $request->level;
        $plagueAppearance->save();

        return redirect()->route('registro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\plagueAppearance  $plagueAppearance
     * @return \Illuminate\Http\Response
     */
    public function show(plagueAppearance $plagueAppearance)
    {
        dd($plagueAppearance);
        #return view('plagueAppearance.show',  ['plagueAppearance'=>$plagueAppearance]);
        return view('plagueAppearance.show', compact('plagueAppearance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\plagueAppearance  $plagueAppearance
     * @return \Illuminate\Http\Response
     */
    public function edit(plagueAppearance $plagueAppearance)
    {
        return view('plagueAppearance.edit', compact('plagueAppearance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\plagueAppearance  $plagueAppearance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, plagueAppearance $plagueAppearance)
    {
        return ("Update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\plagueAppearance  $plagueAppearance
     * @return \Illuminate\Http\Response
     */
    public function destroy(plagueAppearance $plagueAppearance)
    {
        return ("Destroy");
    }
}
