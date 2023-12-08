<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;

class KategoriController extends Controller
{
    //

    public function katliste()
    {
        $kategoriler=Kategori::all();

        return view('admin.katliste',['kategoriler'=>$kategoriler]);
    }

    public function kateklefrm()
    {
        $kategoriler=Kategori::all();
        return view('admin.katliste',['kategoriler'=>$kategoriler]);
    }

    public function katekle(Request $request)
    {
        $yenikat = new Kategori;
        $yenikat->katad = $request->input('katad');
        $yenikat->ustid = 1;
        $yenikat->save();

        return redirect('/kateklefrm');

    }

    public function katarafrm()
    {
        $kategoriler=Kategori::all();
        return view('admin.kataraliste',['kategoriler'=>$kategoriler]);
    }

    public function katara(Request $gelen)
    {
        $aranan= $gelen->katad;
        $kategoriler = Kategori::where('katad', 'like', "%{$aranan}%")->get();
        return view('admin.kataraliste',['kategoriler'=>$kategoriler]);
    }
}
