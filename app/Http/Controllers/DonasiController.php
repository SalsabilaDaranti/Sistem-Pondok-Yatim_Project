<?php

namespace App\Http\Controllers;

use App\Models\donasi;
use Illuminate\Http\Request;
use Alert;
class DonasiController extends Controller
{

    public function index()
    {
        $donasi = donasi::latest()->get();
//        $donasi = donasi::where('nama_donatur','like','%salsa%')->get();
        return view('donasi.index', compact('donasi'));
    }

    public function create()
    {
        return view('donasi.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_donatur' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required'
        ]);

        $donasi = donasi::create([
            'nama_donatur' => $request->nama_donatur,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal
        ]);

        if ($donasi) {
            return redirect()
                ->route('donasi.index')
                ->with([
//                    'success' => 'Data donasi telah berhasil ditambahkan.'
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


    public function edit($id)
    {
        $dat = donasi::findOrFail($id);
        return view('donasi.edit', compact('dat'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_donatur' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required'
        ]);


        $donasi = donasi::findOrFail($id);

        $donasi->update([
            'nama_donatur' => $request->nama_donatur,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal
        ]);

        if ($donasi) {
            return redirect()
                ->route('donasi.index')
                ->with([
//                    'success' => 'Data donasi telah berhasil diupdate.'
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

    public function destroy($id)
    {
        $donasi = donasi::findOrFail($id);
        $donasi->delete();

        if ($donasi) {
            return redirect()
                ->route('donasi.index')
                ->with([
//                    'success' => 'Data donasi telah berhasil dihapus'
                ]);
        } else {
            return redirect()
                ->route('donasi.index')
                ->with([
//                    'error' => 'Terjadi kesalahan, silahkan coba kembali.'
                ]);
        }
    }
}
