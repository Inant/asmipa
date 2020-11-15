<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Galeri;

class GaleriController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'fa-file-image';
    }

    public function index(Request $request)
    {
        $this->param['pageInfo'] = 'Manage Galeri / List Galeri';
        $this->param['btnRight']['text'] = 'Tambah Data';
        $this->param['btnRight']['link'] = route('galeri.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $galeri = Galeri::where('judul', 'LIKE', "%$keyword%")->paginate(10);
        }
        else{
            $galeri = Galeri::paginate(10);
        }
        
        return \view('backend.galeri.list-galeri', ['galeri' => $galeri], $this->param);
    }

    public function create()
    {
        $this->param['pageInfo'] = 'Manage Galeri / Tambah Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('galeri.index');

        return \view('backend.galeri.tambah-galeri', $this->param);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png,webp',
            'keterangan' => 'required',
        ]);

        $newGaleri = new Galeri;

        $newGaleri->judul = $request->get('judul');
        $newGaleri->keterangan = $request->get('keterangan');
        
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/galeri';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $newGaleri->foto = $namaFoto;
        }
        else{
            $newGaleri->foto = 'default.jpg';
        }

        $newGaleri->save();

        return redirect()->back()->withStatus('Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->param['pageInfo'] = 'Manage Galeri / Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('galeri.index');
        $this->param['galeri'] = Galeri::find($id);

        return \view('backend.galeri.edit-galeri', $this->param);
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::find($id);
        
        $validatedData = $request->validate([
            'judul' => 'required',
            'foto' => 'mimes:jpg,jpeg,png,webp',
            'keterangan' => 'required'
        ]);

        $galeri->judul = $request->get('judul');
        $galeri->keterangan = $request->get('keterangan');
        
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/galeri';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $galeri->foto = $namaFoto;
        }

        $galeri->save();

        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        $galeri->delete();

        return redirect()->route('galeri.index')->withStatus('Data berhasil dihapus.');
    }
}
