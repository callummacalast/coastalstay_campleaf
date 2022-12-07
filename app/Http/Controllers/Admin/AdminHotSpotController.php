<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HotSpot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminHotSpotController extends Controller
{
    public function index()
    {
        $hotspots = HotSpot::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.hotspots.index', compact('hotspots'));
    }

    public function show($hotspot)
    {
        $hotspot = HotSpot::find($hotspot);

        return view('admin.hotspots.show', compact('hotspot'));
    }

    public function update(Request $request, $hotspot)
    {
        // dd($request->all());


        $spot = HotSpot::findOrFail($hotspot);

        $validated = $request->validate([
            'lat' => 'required',
            'lng' => 'required',
            'name' => 'required',
            'description' => 'required',
            'status' => 'in:live,pending',
        ]);

        $spot->fill($validated);
        $spot->update();

        return Redirect::route('admin.hotspots.index')->with('success', 'Hotspot updated');
    }
}
