<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use App\Models\Record;
use Illuminate\Http\Request;

class CropController extends Controller
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
        $crops = Crop::all();
        return view('crop.index', compact('crops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crop.create');
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

        $crop = new Crop();
        $crop->name = $request->name;
        $crop->description = $request->description;
        $crop->save();

        return redirect()->route('record.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Crop $crop)
    {
        $records = Record::where('crop_id', $crop->id)->get();
        return view('crop.show', compact('crop', 'records'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crop $crop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crop $crop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crop $crop)
    {
        //
    }
}
