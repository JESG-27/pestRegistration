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
        return view('Appearance/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Appearance/createAppearence');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\plagueAppearance  $plagueAppearance
     * @return \Illuminate\Http\Response
     */
    public function show(plagueAppearance $plagueAppearance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\plagueAppearance  $plagueAppearance
     * @return \Illuminate\Http\Response
     */
    public function edit(plagueAppearance $plagueAppearance)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\plagueAppearance  $plagueAppearance
     * @return \Illuminate\Http\Response
     */
    public function destroy(plagueAppearance $plagueAppearance)
    {
        //
    }
}
