<?php

namespace App\Http\Controllers\Api;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mataPelajarans = MataPelajaran::all();
        return response()->json(['mata_pelajarans' => $mataPelajarans], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mataPelajaran = MataPelajaran::create($request->all());
        return response()->json(['mata_pelajaran' => $mataPelajaran], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(MataPelajaran $mataPelajaran)
    {
        return response()->json(['mata_pelajaran' => $mataPelajaran], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MataPelajaran $mataPelajaran)
    {
        $mataPelajaran->update($request->all());
        return response()->json(['mata_pelajaran' => $mataPelajaran], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MataPelajaran  $mataPelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataPelajaran $mataPelajaran)
    {
        $mataPelajaran->delete();
        return response()->json(null, 204);
    }
}
