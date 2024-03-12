<?php

namespace App\Http\Controllers\Api;

use App\Models\Riwayat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riwayats = Riwayat::all();
        return response()->json(['riwayats' => $riwayats], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $riwayat = Riwayat::create($request->all());
        return response()->json(['riwayat' => $riwayat], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Riwayat  $riwayat
     * @return \Illuminate\Http\Response
     */
    public function show(Riwayat $riwayat)
    {
        return response()->json(['riwayat' => $riwayat], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Riwayat  $riwayat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Riwayat $riwayat)
    {
        $riwayat->update($request->all());
        return response()->json(['riwayat' => $riwayat], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Riwayat  $riwayat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Riwayat $riwayat)
    {
        $riwayat->delete();
        return response()->json(null, 204);
    }
}
