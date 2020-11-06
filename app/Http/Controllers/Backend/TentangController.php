<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Tentang;

class TentangController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'fa-info';
    }

    public function index(Request $request)
    {
        $this->param['pageInfo'] = 'Tentang / List';
        // $this->param['btnRight']['text'] = 'Tambah Data';
        // $this->param['btnRight']['link'] = route('tentang.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $tentang = Tentang::where('tipe', 'LIKE', "%$keyword%")->get();
        }
        else{
            $tentang = Tentang::get();
        }
        
        return \view('backend.tentang.list-tentang', ['tentang' => $tentang], $this->param);
    }

    public function edit($id)
    {
        $this->param['pageInfo'] = 'Tentang / Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('tentang.index');
        $this->param['tentang'] = Tentang::find($id);

        return \view('backend.tentang.edit-tentang', $this->param);
    }

    public function update(Request $request, $id)
    {
        $tentang = Tentang::find($id);

        $validatedData = $request->validate([
            'kontent' => 'required',
            'tipe' => 'required',
        ]);

        $tentang->kontent = $request->get('kontent');
        $tentang->tipe = $request->get('tipe');
        $tentang->save();

        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }

    public function struktur()
    {
        $this->param['pageInfo'] = 'Struktur Organisai / Edit Data';
        $this->param['struktur'] = Tentang::where('tipe', 'Struktur Organisasi')->get()[0];

        return \view('backend.struktur.struktur', $this->param);
    }

    public function updateStruktur(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'kontent' => 'required',
        ]);
        $tentang = Tentang::find($id);
        if($request->file('kontent')){
            $struktur = $request->file('kontent');
            $pathUpload = 'public/assets/backend/img/struktur';
            $namaFile = time().".".$struktur->getClientOriginalName();
            $struktur->move($pathUpload, $namaFile);
            $tentang->kontent = $namaFile;
        }
        $tentang->save();

        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }
}
