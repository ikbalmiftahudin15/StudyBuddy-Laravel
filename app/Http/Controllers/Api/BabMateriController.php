<?php

namespace App\Http\Controllers\Api;

use App\Models\BabMateri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BabMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $babMateris = BabMateri::all();
        return response()->json(['bab_materis' => $babMateris], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $babMateri = BabMateri::create($request->all());
        return response()->json(['bab_materi' => $babMateri], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BabMateri  $babMateri
     * @return \Illuminate\Http\Response
     */
    public function show(BabMateri $babMateri)
    {
        return response()->json(['bab_materi' => $babMateri], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BabMateri  $babMateri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BabMateri $babMateri)
    {
        $babMateri->update($request->all());
        return response()->json(['bab_materi' => $babMateri], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BabMateri  $babMateri
     * @return \Illuminate\Http\Response
     */
    public function destroy(BabMateri $babMateri)
    {
        $babMateri->delete();
        return response()->json(null, 204);
    }
}
