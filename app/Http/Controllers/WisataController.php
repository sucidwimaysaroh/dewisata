<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use App\Pengelola;

class WisataController extends Controller
{
    public function  daftarwisata()
    {
      return view('wisata.daftarwisata');
    }

    public function  datawisata()
    {
      $wisata = Wisata::all();
      $pengelola = Pengelola::all();
      return view('wisata.index',compact(['wisata','pengelola']));
      }
}
