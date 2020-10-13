<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Kontak;

class KontakController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'fa-phone';
    }

    public function index()
    {
        $this->param['pageInfo'] = 'Kontak / Edit Kontak';
        // $this->param['btnRight']['text'] = 'Lihat Data';
        // $this->param['btnRight']['link'] = route('kontak.index');
        $this->param['kontak'] = Kontak::find(1);

        return \view('backend.kontak.edit-kontak', $this->param);
    }

    public function update(Request $request, $id)
    {
        $kontak = Kontak::find($id);

        // $validatedData = $request->validate([
        //     'kontent' => 'required',
        //     'tipe' => 'required',
        // ]);

        $kontak->telepon = $request->get('telepon');
        $kontak->no_hp = $request->get('no_hp');
        $kontak->email = $request->get('email');
        $kontak->fb = $request->get('fb');
        $kontak->ig = $request->get('ig');
        $kontak->youtube = $request->get('youtube');
        $kontak->alamat = $request->get('alamat');
        $kontak->save();

        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }
}
