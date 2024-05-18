<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Belanja;

class BelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $belanja = Belanja::all();
        return view('belanja.index',compact('nomor','belanja'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('belanja.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $belanja = new Belanja;
        $belanja->barang = $request->barang;
        $belanja->harga = $request->harga;
        $belanja->tgl = $request->tgl;
        $belanja->save();

        return redirect('/belanja');
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
        $belanja = Belanja::find($id);
        return view('belanja.edit',compact('belanja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $belanja = Belanja::find($id);

        $belanja->barang = $request->barang;
        $belanja->harga = $request->harga;
        $belanja->tgl = $request->tgl;
        $belanja->save();

        return redirect('/belanja');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $belanja = Belanja::find($id);
        $belanja->delete();

        return redirect('/belanja');
    }
}
