<?php

namespace App\Http\Controllers;

use App\Models\kebutuhan;
use Illuminate\Http\Request;

class KebutuhanController extends Controller
{

    public function index()
    {
        $kebutuhan = kebutuhan::all();
        return view('kebutuhan.index', compact('kebutuhan'));
    }

    public function create()
    {
        return view('kebutuhan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_barang' => $request->nama,
            'jumlah_barang' => $request->jumlah,
            'harga_barang' => $request->harga
        ]);

        $kebutuhan = kebutuhan::create([
            'nama_barang' => $request->nama,
            'jumlah_barang' => $request->jumlah,
            'harga_barang' => $request->harga
        ]);

        if ($kebutuhan) {
            return redirect()
                ->route('kebutuhan.index')
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

    public function show(kebutuhan $kebutuhan)
    {
        $kebutuhan = Kebutuhan::findOrFail($id);
        return view('kebutuhan.show', compact('kebutuhan'));
        //
    }

    public function edit($id)
    {
        $dat = kebutuhan::findOrFail($id);
        return view('kebutuhan.edit', compact('dat'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'jumlah_barang' => 'required',
            'harga_barang' => 'required'
        ]);

        $kebutuhan = kebutuhan::findOrFail($id);

        $kebutuhan->update([
            'nama_barang' => $request->nama_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'harga_barang' => $request->harga_barang
        ]);

        if ($kebutuhan) {
            return redirect()
                ->route('kebutuhan.index')
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

    public function destroy($id)
    {
        $kebutuhan = kebutuhan::findOrFail($id);
        $kebutuhan->delete();

        if ($kebutuhan) {
            return redirect()
                ->route('kebutuhan.index')
                ->with([
//                    'success' => 'Data donasi telah berhasil dihapus'
                ]);
        } else {
            return redirect()
                ->route('kebutuhan.index')
                ->with([
//                    'error' => 'Terjadi kesalahan, silahkan coba kembali.'
                ]);
        }
    }
}
