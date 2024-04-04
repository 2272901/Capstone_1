<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('kk.index', [
            'kks' => KartuKeluarga::all(),
        ]);
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
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function show(KartuKeluarga $kartuKeluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(KartuKeluarga $kartuKeluarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KartuKeluarga $kartuKeluarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(KartuKeluarga $kartuKeluarga)
    {
        //
    }
}
