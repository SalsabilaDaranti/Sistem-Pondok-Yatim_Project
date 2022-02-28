<?php

namespace App\Http\Controllers;

use App\Models\anak_asuh;
use Illuminate\Http\Request;

class AnakAsuhController extends Controller
{
    public function index()
    {
        $anakasuh = anak_asuh::latest()->get();
        return view('anakasuh.index', compact('anakasuh'));
    }

    public function create()
    {
        return view('anakasuh.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_anak' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'pendidikan' => 'required',
            'nama_ortu_wali' => 'required'
        ]);

        $anakasuh = anak_asuh::create([
            'nama_anak' => $request->nama_anak,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pendidikan' => $request->pendidikan,
            'nama_ortu_wali' => $request->nama_ortu_wali
        ]);

        if ($anakasuh) {
            return redirect()
                ->route('anakasuh.index')
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
        $dat = anak_asuh::findOrFail($id);
        return view('anakasuh.edit', compact('dat'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_anak' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'pendidikan' => 'required',
            'nama_ortu_wali' => 'required'
        ]);


        $anakasuh = anak_asuh::findOrFail($id);

        $anakasuh->update([
            'nama_anak' => $request->nama_anak,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pendidikan' => $request->pendidikan,
            'nama_ortu_wali' => $request->nama_ortu_wali
        ]);

        if ($anakasuh) {
            return redirect()
                ->route('anakasuh.index')
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
        $anakasuh = anak_asuh::findOrFail($id);
        $anakasuh->delete();

        if ($anakasuh) {
            return redirect()
                ->route('anakasuh.index')
                ->with([
//                    'success' => 'Data Pengasuh telah berhasil dihapus'
                ]);
        } else {
            return redirect()
                ->route('anakasuh.index')
                ->with([
//                    'error' => 'Terjadi kesalahan, silahkan coba kembali.'
                ]);
        }
    }
}
