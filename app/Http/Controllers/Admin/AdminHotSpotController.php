<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HotSpot;
use Illuminate\Http\Request;

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
}
