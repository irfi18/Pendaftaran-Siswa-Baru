<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        

        $pendaftarans = Pendaftaran::all();
        return view('pendaftaran.index')->with('pendaftarans', $pendaftarans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pendaftaran.create');
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
        $this->validate($request,[
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'smp' => 'required',
            'jurusan1' => 'required',
            'jurusan2' => 'required',
            'jurusan3' => 'required',
            'nohp' => 'required'
        ]);

        // Mengambil dan menyimpan ke database
        $pendaftar = new Pendaftaran;
        $pendaftar->nis = $request->input('nis');
        $pendaftar->nama = $request->input('nama');
        $pendaftar->alamat = $request->input('alamat');
        $pendaftar->smp = $request->input('smp');
        $pendaftar->jurusan1 = $request->input('jurusan1');
        $pendaftar->jurusan2 = $request->input('jurusan2');
        $pendaftar->jurusan3 = $request->input('jurusan3');
        $pendaftar->nomorhp = $request->input('nohp');
        $pendaftar->user_id = auth()->user()->id;
        $pendaftar->save();

        return redirect('/pendaftaran')->with('success', 'Data Siswa Berhasil Ditambahkan');
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
        $pendaftar = Pendaftaran::find($id);
        return view('pendaftaran.show')->with('pendaftar', $pendaftar);
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
        $pendaftar = Pendaftaran::find($id);
        return view('pendaftaran.edit')->with('pendaftar', $pendaftar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'nis' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'smp' => 'required',
            'jurusan1' => 'required',
            'jurusan2' => 'required',
            'jurusan3' => 'required',
            'nohp' => 'required'
        ]);

        // Mengambil dan menyimpan ke database
        $pendaftar = Pendaftaran::find($id);
        $pendaftar->nis = $request->input('nis');
        $pendaftar->nama = $request->input('nama');
        $pendaftar->alamat = $request->input('alamat');
        $pendaftar->smp = $request->input('smp');
        $pendaftar->jurusan1 = $request->input('jurusan1');
        $pendaftar->jurusan2 = $request->input('jurusan2');
        $pendaftar->jurusan3 = $request->input('jurusan3');
        $pendaftar->nomorhp = $request->input('nohp');
        $pendaftar->save();

        return redirect('/pendaftaran')->with('success', 'Data Siswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pendaftar = Pendaftaran::find($id);
        $pendaftar->delete();
        return redirect('/pendaftaran')->with('success', 'Data Siswa Berhasil Dihapus');
    }
}
