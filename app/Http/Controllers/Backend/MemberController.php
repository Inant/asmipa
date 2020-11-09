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
        $this->param['pageInfo'] = 'Manage Mitra / List Mitra';
        $this->param['btnRight']['text'] = 'Tambah Data';
        $this->param['btnRight']['link'] = route('member.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $member = Member::where('nama', 'LIKE', "%$keyword%")->paginate(10);
        }
        else{
            $member = Member::orderBy('id', 'desc')->paginate(10);
        }
        
        return \view('backend.member.list-member', ['member' => $member], $this->param);
    }

    public function create()
    {
        $this->param['pageInfo'] = 'Manage Mitra / Tambah Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('member.index');

        return \view('backend.member.tambah-member', $this->param);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:member',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'ktp' => 'required|mimes:jpeg,jpg,png,pdf',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'nama_perusahaan' => 'required',
            'nama_pemilik' => 'required',
            'alamat_perusahaan' => 'required',
            'no_ahu' => 'required|mimes:jpeg,png,jpg,doc,pdf,docx',
            'bidang_usaha' => 'required',
            'no_telepon_perusahaan' => 'required',
            'jabatan' => 'required',
        ]);

        $newMember = new Member;

        $newMember->nama = $request->get('nama');
        $newMember->email = $request->get('email');
        $newMember->tempat_lahir = $request->get('tempat_lahir');
        $newMember->tgl_lahir = $request->get('tgl_lahir');
        if($request->file('ktp')){
            $ktp = $request->file('ktp');
            $pathUpload = 'public/assets/backend/berkas/member/ktp';
            $fileKtp = time().".".$ktp->getClientOriginalName();
            $ktp->move($pathUpload, $fileKtp);
            $newMember->ktp = $fileKtp;
        }
        else{
            $newMember->ktp = 'default.png';
        }
        $newMember->alamat = $request->get('alamat');
        $newMember->no_telepon = $request->get('no_telepon');
        $newMember->nama_perusahaan = $request->get('nama_perusahaan');
        $newMember->nama_pemilik = $request->get('nama_pemilik');
        $newMember->alamat_perusahaan = $request->get('alamat_perusahaan');
        // $newMember->no_ahu = $request->get('no_ahu');
        if($request->file('no_ahu')){
            $no_ahu = $request->file('no_ahu');
            $pathUpload = 'public/assets/backend/berkas/member/no_ahu';
            $namaFile = time().".".$no_ahu->getClientOriginalName();
            $no_ahu->move($pathUpload, $namaFile);
            $newMember->no_ahu = $namaFile;
        }
        else{
            $newMember->no_ahu = 'default.png';
        }

        $newMember->bidang_usaha = $request->get('bidang_usaha');
        $newMember->no_telepon_perusahaan = $request->get('no_telepon_perusahaan');
        $newMember->website = $request->get('website');
        $newMember->jabatan = $request->get('jabatan');
        $newMember->status = 'Terima';

        $newMember->save();

        return redirect()->back()->withStatus('Data berhasil disimpan.');
    }

    public function show($id)
    {
        $this->param['pageInfo'] = 'Manage Mitra / Detail';
        $this->param['btnRight']['text'] = 'Kembali';
        $this->param['btnRight']['link'] = route('member.index');
        $this->param['member'] = Member::find($id);

        return \view('backend.member.show-member', $this->param);
    }

    public function edit($id)
    {
        $this->param['pageInfo'] = 'Manage Mitra / Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('member.index');
        $this->param['member'] = Member::find($id);

        return \view('backend.member.edit-member', $this->param);
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $isUnique = $member->email == $request->email ? '' : '|unique:member';
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email'.$isUnique,
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'ktp' => 'mimes:jpeg,jpg,png,pdf',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'nama_perusahaan' => 'required',
            'nama_pemilik' => 'required',
            'alamat_perusahaan' => 'required',
            'no_ahu' => 'mimes:jpeg,png,jpg,doc,pdf,docx',
            'bidang_usaha' => 'required',
            'no_telepon_perusahaan' => 'required',
            'jabatan' => 'required',
        ]);



        $member->nama = $request->get('nama');
        $member->email = $request->get('email');
        $member->tempat_lahir = $request->get('tempat_lahir');
        $member->tgl_lahir = $request->get('tgl_lahir');
        if($request->file('ktp')){
            $ktp = $request->file('ktp');
            $pathUpload = 'public/assets/backend/berkas/member/ktp';
            $fileKtp = time().".".$ktp->getClientOriginalName();
            $ktp->move($pathUpload, $fileKtp);
            $member->ktp = $fileKtp;
        }
        $member->alamat = $request->get('alamat');
        $member->no_telepon = $request->get('no_telepon');
        $member->nama_perusahaan = $request->get('nama_perusahaan');
        $member->nama_pemilik = $request->get('nama_pemilik');
        $member->alamat_perusahaan = $request->get('alamat_perusahaan');
        // $member->no_ahu = $request->get('no_ahu');
        if($request->file('no_ahu')){
            $no_ahu = $request->file('no_ahu');
            $pathUpload = 'public/assets/backend/berkas/member/no_ahu';
            $namaFile = time().".".$no_ahu->getClientOriginalName();
            $no_ahu->move($pathUpload, $namaFile);
            $member->no_ahu = $namaFile;
        }

        $member->bidang_usaha = $request->get('bidang_usaha');
        $member->no_telepon_perusahaan = $request->get('no_telepon_perusahaan');
        $member->website = $request->get('website');
        $member->jabatan = $request->get('jabatan');
        $member->status = 'Terima';

        $member->save();

        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }

    public function approve($id)
    {
        $member = Member::findOrFail($id);
        $member->status = 'Terima';
        $member->save();

        $to_name = $member->nama;
        $to_email = $member->email;
        $data = array('nama'=>$member->nama, "body" => "Anda telah diterima menjadi mitra resmi ASMIPA.");
        \Mail::send('emails', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)->subject('Persetujuan Mitra ASMIPA');
        $message->from('astanamitra.p@gmail.com','Astana Mitra Pariwisata');
        });
        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }
    
    public function disapprove($id)
    {
        $member = Member::findOrFail($id);
        $member->status = 'Tolak';
        $member->save();
        $to_name = $member->nama;
        $to_email = $member->email;
        $data = array('nama'=>$member->nama, "body" => "Mohon maaf anda belum diterima untuk menjadi mitra resmi ASMIPA.");
        \Mail::send('emails', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)->subject('Persetujuan Mitra ASMIPA');
        $message->from('astanamitra.p@gmail.com','Astana Mitra Pariwisata');
        });
        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);

        $member->delete();

        return redirect()->route('member.index')->withStatus('Data berhasil dihapus.');
    }
}
