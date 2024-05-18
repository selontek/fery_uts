<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanaDesa;


class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $nomor = 1;
        $dandes = DanaDesa::all();
        return view('desa.index',compact('nomor','dandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('desa.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dandes = new DanaDesa;
        $dandes->kode = $request->kode;
        $dandes->pendapatan = $request->pendapatan;
        $dandes->anggaran = $request->anggaran;
        $dandes->realisasi = $request->realisasi;
        $dandes->sisa = $request->sisa;
        $dandes->save();

        return redirect('/danadesa');
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
        $dandes = DanaDesa::find($id);
        return view('desa.edit',compact('dandes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dandes = DanaDesa::find($id);

        $dandes->kode = $request->kode;
        $dandes->pendapatan = $request->pendapatan;
        $dandes->anggaran = $request->anggaran;
        $dandes->realisasi = $request->realisasi;
        $dandes->sisa = $request->sisa;
        $dandes->save();

        return redirect('/danadesa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dandes = DanaDesa::find($id);
        $dandes->delete();

        return redirect('/danadesa');
    }
}
