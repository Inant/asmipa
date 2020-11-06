<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Berita;

class FBeritaController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $allBerita = Berita::paginate(6);
        if ($keyword) {
            $allBerita = Berita::where('judul', 'LIKE', "%$keyword%")->orWhere('konten', 'LIKE', "%$keyword%")->paginate(5);
        }
        return view('frontend.berita.berita', ['allBerita' => $allBerita]);
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->get()[0];

        return view('frontend.berita.show-berita', ['berita' => $berita]);
    }
}
