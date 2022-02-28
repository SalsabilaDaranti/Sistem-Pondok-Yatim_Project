<?php

namespace App\Http\Controllers;

use App\Models\pengasuh;
use Illuminate\Http\Request;

class PengasuhController extends Controller
{
    public function index()
    {
        $pengasuh = pengasuh::latest()->get();
        return view('pengasuh.index', compact('pengasuh'));

    }

    public function create()
    {
        return view('pengasuh.create');
    }

    public function store(Request $request)
    {
         $this->validate($request, [
            'nama' => 'required|string|max:155',
            'jenis_kelamin' => 'required',
            'umur' => 'required'
        ]);

        $pengasuh = pengasuh::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur
        ]);

        if ($pengasuh) {
            return redirect()
                ->route('pengasuh.index')
                ->with([
//                    'success' => 'Data Pengasuh baru telah berhasil ditambahkan.'
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
        $dat = pengasuh::findOrFail($id);
        return view('pengasuh.edit', compact('dat'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:155',
            'jenis_kelamin' => 'required',
            'umur' => 'required'
        ]);

        $pengasuh = pengasuh::findOrFail($id);

        $pengasuh->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur
        ]);

        if ($pengasuh) {
            return redirect()
                ->route('pengasuh.index')
                ->with([
//                    'success' => 'Data Pengasuh telah berhasil diupdate.'
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
        $pengasuh = pengasuh::findOrFail($id);
        $pengasuh->delete();

        if ($pengasuh) {
            return redirect()
                ->route('pengasuh.index')
                ->with([
//                    'success' => 'Data Pengasuh telah berhasil dihapus'
                ]);
        } else {
            return redirect()
                ->route('pengasuh.index')
                ->with([
//                    'error' => 'Terjadi kesalahan, silahkan coba kembali.'
                ]);
        }
    }
}
