<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $laporan = laporan::latest()->get();
        return view('laporan.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporan.create');
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
            'tanggal_awal' => $request->awal,
            'tanggal_akhir' => $request->akhir,
           
        ]);

        $laporan = laporan::create([
            'tanggal_awal' => $request->awal,
            'tanggal_akhir' => $request->akhir,
           
           
        ]);

        if ($laporan) {
            return redirect()
                ->route('laporan.index')
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
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(laporan $laporan)
    {
        $laporan = laporan::findOrFail($id);
        return view('laporan.show', compact('laporan'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(laporan $laporan)
    {
        $dat = laporan::findOrFail($id);
        return view('laporan.edit', compact('dat'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, laporan $laporan)
    {
        $this->validate($request, [
            'tanggal_awal' => 'required',
            'tanggal_akhir' => 'required',
           
        ]);

        $laporan = laporan::findOrFail($id);

        $kebutuhan->update([
            'tanggal_awal' => $request->awal,
            'tanggal_akhir' => $request->akhir,
           
        ]);

        if ($laporan) {
            return redirect()
                ->route('laporan.index')
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(laporan $laporan)
    {
        $laporan = laporan::findOrFail($id);
        $laporan->delete();

        if ($laporan) {
            return redirect()
                ->route('laporan.index')
                ->with([
//                    'success' => 'Data donasi telah berhasil dihapus'
                ]);
        } else {
            return redirect()
                ->route('laporans.index')
                ->with([
//                    'error' => 'Terjadi kesalahan, silahkan coba kembali.'
                ]);
        }
    
    }
}
