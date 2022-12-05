<?php

namespace App\Http\Controllers;

use App\Models\HotSpot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HotSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $hotspots = HotSpot::where('status', 'live')
            ->paginate(10);

        $locations = $hotspots->pluck('lng', 'lat', 'name');

        // dd($lat);

        // dd($locations);

        return view('hotspots.index', compact('hotspots', 'locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotspots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all()); 

        if (Auth::check()) {
            $status = 'live';
        } else {
            $status = 'pending';
        }

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',

            'lat' => 'required',
            'lng' => 'required'
        ]);

        if ($request->hasFile('hotspot_image')) {
            $filenameWithExt = $request->file('hotspot_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('hotspot_image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            $path = $request->file('hotspot_image')->storeAs('public/hotspot_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'no_image.png';
        }

        $hotspot = new HotSpot;
        $hotspot->status = $status;
        $hotspot->image = $fileNameToStore;
        $hotspot->fill($validated);
        $hotspot->save();

        return Redirect::route('hotspot.index')->with('success', 'Hotspot Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HotSpot  $hotSpot
     * @return \Illuminate\Http\Response
     */
    public function show($hotSpot)
    {
        $hotSpot = HotSpot::findOrFail($hotSpot);
        $hotspots = HotSpot::all()->take(4);



        return view('hotspots.show', compact('hotSpot', 'hotspots'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HotSpot  $hotSpot
     * @return \Illuminate\Http\Response
     */
    public function edit(HotSpot $hotSpot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HotSpot  $hotSpot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HotSpot $hotSpot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HotSpot  $hotSpot
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotSpot $hotSpot)
    {
        //
    }
}
