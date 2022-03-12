<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kegiatan;

class kegiatancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = kegiatan::all();
        return view('kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan.create');
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
        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required',
           'foto' =>'required',
        ]);


        $kegiatan = kegiatan::create([
        
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'foto' => $request->foto,
        ]);

        if ($kegiatan) {
            return redirect()
                ->route('kegiatan.index')
                ->with([
//                    'success' => 'Data kebutuhan telah berhasil ditambahkan.'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
//                    'error' => 'Terjadi kesalahan, silahkan coba kembali.'
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kegiatan = kegiatan::findOrFail($id);
        return view('kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dat = kegiatan::findOrFail($id);
        return view('kegiatan.edit', compact('dat'));
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
        $this->validate($request, [
            'no' => 'required',
            'judul' => 'required',
            'keterangan' => 'required',
            'foto' => 'required',
        ]);

        $kegiatan = kegiatan::findOrFail($id);

        $kegiatan->update([
            'no' => $request->no,
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'foto' => $request->foto,
            
        ]);

        if ($kegiatan) {
            return redirect()
                ->route('kegiatan.index')
                ->with([
//                    'success' => 'Data kebutuhan telah berhasil diupdate.'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
//                    'error' => 'Terjadi kesalahan, silahkan coba kembali.'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kegiatan = kegiatan::findOrFail($id);
        $kegiatan->delete();

        if ($kegiatan) {
            return redirect()
                ->route('kegiatan.index')
                ->with([
//                    'success' => 'Data donasi telah berhasil dihapus'
                ]);
        } else {
            return redirect()
                ->route('kegiatan.index')
                ->with([
//                    'error' => 'Terjadi kesalahan, silahkan coba kembali.'
                ]);
        }
    }
}
