<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPenduduk = Penduduk::all();
        return view('crud.data', compact('dataPenduduk'));
    }
    public function addPenduduk()
    {
        return view('crud.tambah');
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
        Penduduk::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'pekerjaan' => $request->pekerjaan,
            'warga' => $request->warga,
            'asal' => $request->asal,
            'tanggal' => $request->tanggal,
            'darah' => $request->darah,
        ]);
        
        return redirect('/');   
    }
    public function editData($id_penduduk){
        $dataPenduduk=Penduduk::findorfail($id_penduduk);
        return view("crud.edit",compact("dataPenduduk"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_penduduk)
    {
        $dataPenduduk=Penduduk::findorfail($id_penduduk);
        $dataPenduduk->update($request->all());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_penduduk)
    {
        $dataPenduduk=Penduduk::findorfail($id_penduduk);
        $dataPenduduk->delete();
        return back();
    }
}
