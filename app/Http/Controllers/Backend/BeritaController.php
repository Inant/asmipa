<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Berita;

class BeritaController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'fa-newspaper';
    }

    public function index(Request $request)
    {
        $this->param['pageInfo'] = 'Manage Berita / List Berita';
        $this->param['btnRight']['text'] = 'Tambah Data';
        $this->param['btnRight']['link'] = route('berita.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $berita = Berita::where('nama', 'LIKE', "%$keyword%")->paginate(10);
        }
        else{
            $berita = Berita::paginate(10);
        }
        
        return \view('backend.berita.list-berita', ['berita' => $berita], $this->param);
    }

    public function create()
    {
        $this->param['pageInfo'] = 'Manage Berita / Tambah Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('berita.index');

        return \view('backend.berita.tambah-berita', $this->param);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'tanggal' => 'required|date',
            'foto' => 'required',
            'konten' => 'required'
        ]);

        $newBerita = new Berita;

        $newBerita->judul = $request->get('judul');
        $newBerita->slug = str_replace(' ', '-', strtolower($request->get('judul')));
        $newBerita->penulis = $request->get('penulis');
        $newBerita->tanggal = $request->get('tanggal');
        $newBerita->konten = $request->get('konten');
        
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/berita';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $newBerita->foto = $namaFoto;
        }
        else{
            $newBerita->foto = 'default.jpg';
        }

        $newBerita->save();

        return redirect()->back()->withStatus('Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->param['pageInfo'] = 'Manage Berita / Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('berita.index');
        $this->param['berita'] = Berita::find($id);

        return \view('backend.berita.edit-berita', $this->param);
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        $isUnique = $berita->judul != $request->get('berita') ? '' : '|unique:berita';
        $validatedData = $request->validate([
            'judul' => 'required'.$isUnique,
            'penulis' => 'required',
            'tanggal' => 'required|date',
            'konten' => 'required'
        ]);

        $berita->judul = $request->get('judul');
        $berita->slug = str_replace(' ', '-', strtolower($request->get('judul')));
        $berita->penulis = $request->get('penulis');
        $berita->tanggal = $request->get('tanggal');
        $berita->konten = $request->get('konten');
        
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/berita';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $berita->foto = $namaFoto;
        }

        $berita->save();

        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        $berita->delete();

        return redirect()->route('berita.index')->withStatus('Data berhasil dihapus.');
    }
}
