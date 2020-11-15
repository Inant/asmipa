<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Galeri;
class FGaleriController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $allGaleri = Galeri::orderBy('id', 'desc')->paginate(9);
        if ($keyword) {
            $allGaleri = Galeri::where('judul', 'LIKE', "%$keyword%")->orWhere('keterangan', 'LIKE', "%$keyword%")->orderBy('id', 'desc')->paginate(9);
        }
        return view('frontend.galeri.galeri', ['allGaleri' => $allGaleri]);
    }

    public function getGaleri($id)
    {
        $galeri = Galeri::find($id);

        return json_encode($galeri);
    }
}
