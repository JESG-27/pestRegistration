<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
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
        $records = Record::all();
        return view('record.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('record.create');
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

        $record = new Record();
        $record->crop = $request->crop;
        $record->name = $request->name;
        $record->location = $request->location;
        $record->level = $request->level;
        $record->comment = $request->comment;
        $record->save();

        return redirect()->route('record.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {
        return view('record.show', compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Record $record)
    {
        return view('record.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Record $record)
    {
        # Validation
        $request->validate([
            'crop' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            'comment' => ['required', 'string', 'max:255']
        ]);

        $record->crop = $request->crop;
        $record->name = $request->name;
        $record->location = $request->location;
        $record->level = $request->level;
        $record->comment = $request->comment;
        $record->save();

        return redirect()->route('record.show', $record);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
        $record->delete();
        return redirect()->route('record.index');
    }
}
