<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerja;

class KerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $kerja = Kerja::all();
        return view('kerja.index',compact('nomor','kerja'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kerja.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kerja = new Kerja;
        $kerja->kegiatan = $request->kegiatan;
        $kerja->anggaran = $request->anggaran;
        $kerja->tgl = $request->tgl;
        $kerja->save();

        return redirect('/kerja');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kerja = Kerja::find($id);
        return view('kerja.edit',compact('kerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kerja = Kerja::find($id);

        $kerja->kegiatan = $request->kegiatan;
        $kerja->anggaran = $request->anggaran;
        $kerja->tgl = $request->tgl;
        $kerja->save();

        return redirect('/kerja');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kerja = Kerja::find($id);
        $kerja->delete();

        return redirect('/kerja');
    }
}
