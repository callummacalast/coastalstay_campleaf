<?php

namespace App\Http\Controllers;

use App\Models\LocalAmenity;
use Illuminate\Http\Request;

class LocalAmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LocalAmenity $localAmenity)
    {
        $localAmenity = LocalAmenity::all();
        return view('amenities.index', compact('localAmenity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\LocalAmenity  $localAmenity
     * @return \Illuminate\Http\Response
     */
    public function show(LocalAmenity $localAmenity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocalAmenity  $localAmenity
     * @return \Illuminate\Http\Response
     */
    public function edit(LocalAmenity $localAmenity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LocalAmenity  $localAmenity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LocalAmenity $localAmenity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocalAmenity  $localAmenity
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocalAmenity $localAmenity)
    {
        //
    }
}
