<?php

namespace App\Http\Controllers\Api;

use App\Models\LatihanSoal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LatihanSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latihanSoals = LatihanSoal::all();
        return response()->json(['latihan_soals' => $latihanSoals], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $latihanSoal = LatihanSoal::create($request->all());
        return response()->json(['latihan_soal' => $latihanSoal], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LatihanSoal  $latihanSoal
     * @return \Illuminate\Http\Response
     */
    public function show(LatihanSoal $latihanSoal)
    {
        return response()->json(['latihan_soal' => $latihanSoal], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LatihanSoal  $latihanSoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LatihanSoal $latihanSoal)
    {
        $latihanSoal->update($request->all());
        return response()->json(['latihan_soal' => $latihanSoal], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LatihanSoal  $latihanSoal
     * @return \Illuminate\Http\Response
     */
    public function destroy(LatihanSoal $latihanSoal)
    {
        $latihanSoal->delete();
        return response()->json(null, 204);
    }
}
