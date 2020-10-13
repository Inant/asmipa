<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Member;

class MemberController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'fa-users';
    }

    public function index(Request $request)
    {
        $this->param['pageInfo'] = 'Manage Member / List Member';
        $this->param['btnRight']['text'] = 'Tambah Data';
        $this->param['btnRight']['link'] = route('member.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $member = Member::where('nama', 'LIKE', "%$keyword%")->paginate(10);
        }
        else{
            $member = Member::paginate(10);
        }
        
        return \view('backend.member.list-member', ['member' => $member], $this->param);
    }

    public function create()
    {
        $this->param['pageInfo'] = 'Manage Member / Tambah Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('member.index');

        return \view('backend.member.tambah-member', $this->param);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'gender' => 'required',
        ]);

        $newMember = new Member;

        $newMember->nama = $request->get('nama');
        $newMember->gender = $request->get('gender');
        $newMember->alamat = $request->get('alamat');
        $newMember->kontak = $request->get('kontak');
        $newMember->jabatan = $request->get('jabatan');
        
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/member';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $newMember->foto = $namaFoto;
        }
        else{
            $newMember->foto = 'default.png';
        }

        $newMember->save();

        return redirect()->back()->withStatus('Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->param['pageInfo'] = 'Manage Member / Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('member.index');
        $this->param['member'] = Member::find($id);

        return \view('backend.member.edit-member', $this->param);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'gender' => 'required',
        ]);

        $member = Member::find($id);


        $member->nama = $request->get('nama');
        $member->gender = $request->get('gender');
        $member->alamat = $request->get('alamat');
        $member->kontak = $request->get('kontak');
        $member->jabatan = $request->get('jabatan');
        
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/member';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $member->foto = $namaFoto;
        }

        $member->save();

        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);

        $member->delete();

        return redirect()->route('member.index')->withStatus('Data berhasil dihapus.');
    }
}
