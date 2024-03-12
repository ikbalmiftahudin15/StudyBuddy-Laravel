<?php

namespace App\Http\Controllers\Api;

use App\Models\Jenjang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JenjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenjangs = Jenjang::all();
        return response()->json(['jenjangs' => $jenjangs], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenjang = Jenjang::create($request->all());
        return response()->json(['jenjang' => $jenjang], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenjang  $jenjang
     * @return \Illuminate\Http\Response
     */
    public function show(Jenjang $jenjang)
    {
        return response()->json(['jenjang' => $jenjang], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenjang  $jenjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenjang $jenjang)
    {
        $jenjang->update($request->all());
        return response()->json(['jenjang' => $jenjang], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenjang  $jenjang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenjang $jenjang)
    {
        $jenjang->delete();
        return response()->json(null, 204);
    }
}
