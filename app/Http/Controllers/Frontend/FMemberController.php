<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Member;

class FMemberController extends Controller
{
    public function index()
    {
        return view('frontend.member.member');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:member',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'nama_perusahaan' => 'required',
            'nama_pemilik' => 'required',
            'alamat_perusahaan' => 'required',
            'no_ahu' => 'required',
            'bidang_usaha' => 'required',
            'no_telepon_perusahaan' => 'required',
            'jabatan' => 'required',
        ]);

        $newMember = new Member;

        $newMember->nama = $request->get('nama');
        $newMember->email = $request->get('email');
        $newMember->tempat_lahir = $request->get('tempat_lahir');
        $newMember->tgl_lahir = $request->get('tgl_lahir');
        $newMember->alamat = $request->get('alamat');
        $newMember->no_telepon = $request->get('no_telepon');
        $newMember->nama_perusahaan = $request->get('nama_perusahaan');
        $newMember->nama_pemilik = $request->get('nama_pemilik');
        $newMember->alamat_perusahaan = $request->get('alamat_perusahaan');
        // $newMember->no_ahu = $request->get('no_ahu');
        if($request->file('no_ahu')){
            $no_ahu = $request->file('no_ahu');
            $pathUpload = 'public/assets/backend/berkas/member';
            $namaFile = time().".".$no_ahu->getClientOriginalName();
            $no_ahu->move($pathUpload, $namaFile);
            $newMember->no_ahu = $namaFile;
        }
        else{
            $newMember->no_ahu = 'default.png';
        }

        $newMember->bidang_usaha = $request->get('bidang_usaha');
        $newMember->no_telepon_perusahaan = $request->get('no_telepon_perusahaan');
        $newMember->jabatan = $request->get('jabatan');
        $newMember->status = 'Pending';

        $newMember->save();

        return redirect()->back()->withStatus('Data berhasil disimpan dan menunggu proses approval.');
    }
}
