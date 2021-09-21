<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class FrontendController extends Controller
{
    public function index() 
    
    {
        $berita = Berita::latest()->paginate(3);
        
        return view('front', compact('berita'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function show(Berita $berita)
    {
        $berita_detail = $berita;
        return view('front.berita_detail', compact('berita_detail'));
    }

}
