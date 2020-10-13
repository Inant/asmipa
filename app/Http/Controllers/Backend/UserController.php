<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\User;

class UserController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'fa-user';
    }

    public function index(Request $request)
    {
        $this->param['pageInfo'] = 'Manage User / List User';
        $this->param['btnRight']['text'] = 'Tambah Data';
        $this->param['btnRight']['link'] = route('user.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $user = User::where('nama', 'LIKE', "%$keyword%")->paginate(10);
        }
        else{
            $user = User::paginate(10);
        }
        
        return \view('backend.user.list-user', ['user' => $user], $this->param);
    }

    public function create()
    {
        $this->param['pageInfo'] = 'Manage User / Tambah Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('user.index');

        return \view('backend.user.tambah-user', $this->param);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required',
            'konfirmasi_password' => 'required|same:password',
        ]);

        $newUser = new User;

        $newUser->nama = $request->get('nama');
        $newUser->email = $request->get('email');
        $newUser->password = \Hash::make($request->get('password'));

        $newUser->save();

        return redirect()->back()->withStatus('Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->param['pageInfo'] = 'Manage User / Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('user.index');
        $this->param['user'] = User::find($id);

        return \view('backend.user.edit-user', $this->param);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $isUnique = $user->email == $request->email ? '' : '|unique:users';

        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'email'.$isUnique,
        ]);

        $user->nama = $request->get('nama');
        $user->email = $request->get('email');
        $user->save();

        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);

        $member->delete();

        return redirect()->route('member.index')->withStatus('Data berhasil dihapus.');
    }
}
