<?php

namespace App\Http\Controllers;

use App\Ujian;
use Illuminate\Http\Request;

class ujianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujian = ujian::all();
        return view('ujian', ['ujian'=>$ujian]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ujian= new ujian;
        $ujian->id = $request->id;
        $ujian->nama_mk = $request->nama_mk;
        $ujian->dosen = $request->dosen;
        $ujian->jumlahsoal = $request->jumlahsoal;
        $ujian->keterangan = $request->keterangan;
        $ujian->created_at = $request->created_at;
        $ujian->updated_at = $request->updated_at;

        $ujian->save();
       
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function show(Ujian $ujian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function edit(Ujian $ujian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ujian $ujian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ujian $ujian)
    {
        return $ujian;
    }
}
