<?php

namespace App\Http\Controllers;

use App\Mail\Report;
use App\Models\Crop;
use App\Models\File;
use App\Models\Location;
use App\Models\Pest;
use App\Models\Record;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $crops = Crop::all();
        $pests = Pest::all();
        $locations = Location::all();
        return view('record.create', compact('crops', 'pests', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        # Validation
        $request->validate([
            'crop_id' => ['required', 'integer'],
            'pest_id' => ['required', 'integer'],
            'location_id' => ['required', 'integer'],
            'level' => ['required', 'string', 'max:255'],
            'comment' => ['required', 'string', 'max:255']
        ]);

        $request->merge(['user_id' => Auth::id()]);
        $record = Record::create($request->all());

        if ($request->file('image')->isValid()) {
            $path = $request->image->store('', 'public');

            $file = new File();
            $file->path = $path;
            $file->name = $request->image->getClientOriginalName();
            $file->mime = $request->image->getClientMimeType();
            $file->record_id = $record->id;
            $file->save();
        }

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
        $crops = Crop::all();
        $pests = Pest::all();
        $locations = Location::all();
        return view('record.edit', compact('record', 'crops', 'pests', 'locations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Record $record)
    {
        # Validation
        $request->validate([
            'crop_id' => ['required', 'integer'],
            'pest_id' => ['required', 'integer'],
            'location_id' => ['required', 'integer'],
            'level' => ['required', 'string', 'max:255'],
            'comment' => ['required', 'string', 'max:255']
        ]);

        $record->update($request->all());

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
    
    public function deleteCropRecords(Crop $crop)
    {
        $records = Record::where('crop_id', $crop->id)->get();
        $records->each->delete();
        return redirect()->route('crop.show', $crop->id);
    }

    public function deletePestRecords(Pest $pest)
    {
        $records = Record::where('pest_id', $pest->id)->get();
        $records->each->delete();
        return redirect()->route('pest.show', $pest->id);
    }

    public function deleteLocationRecords(Location $location)
    {
        $records = Record::where('location_id', $location->id)->get();
        $records->each->delete();
        return redirect()->route('location.show', $location->id);
    }

    public function downloadFile(File $file)
    {
        return response()->download(storage_path('app/public/' . $file->path), $file->name);
    }

    public function generateReport()
    {
        return view('record.report');
    }

    public function sendReport(Request $request)
    {
        $request->validate([
            'mail' => ['required', 'email']
        ]);

        $records = Record::all();
        Mail::to($request->mail)->send(new Report($records));
        return redirect()->route('record.index');
    }
}
