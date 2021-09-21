<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;

class BeritaController extends AppBaseController
{
    
    public function index(Request $request)
    {
        $berita = Berita::latest()->paginate(9);

        return view('beritas.index',compact('berita'));

    }

   
    public function create(Request $request)
    {

        return view('beritas.create');
    }

    
    public function store(Request $request)
    {
        $input = $request->except('gambar');

        $berita = Berita::create($input);

        if($request->has('gambar')){
            $file=$request->file('gambar');
            $filename=$berita->id.'.'.$file->getClientOriginalExtension();
            $gambar=$request->gambar->storeAs('public/berita',$filename,'local');
            $berita->gambar="storage". substr($gambar, strpos($gambar, '/'));
            $berita->save();
            
        }

        Flash::success('Berita berhasil disimpan.');

        return redirect(route('beritas.index'));
    }

  
    public function show($id)
    {
        $berita = Berita::find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        return view('beritas.show')->with('berita', $berita);
    }

    public function edit($id)
    {
        $berita =Berita::find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        return view('beritas.edit')->with('berita', $berita);
    }

    
    public function update($id, Request $request)
    {
        $berita=Berita::find($id);
        $input = $request->except('gambar');
    
        if(empty($berita)) {
          return redirect(route('beritas.index'));
        }

        $berita->update($input);

        if($request->has('gambar')){
            $file=$request->file('gambar');
            $filename=$berita->id.'.'.$file->getClientOriginalExtension();
            $gambar=$request->gambar->storeAs('public/berita',$filename,'local');
            $berita->gambar="storage". substr($gambar, strpos($gambar, '/'));
            $berita->save();
            
        }

        return redirect(route('beritas.index'));
    }

  
    public function destroy($id)
    {
        $berita = Berita::find($id);

        if (empty($berita)) {
            Flash::error('Berita not found');

            return redirect(route('beritas.index'));
        }

        $berita->delete($id);

        Flash::success('Berita berhasil dihapus.');

        return redirect(route('beritas.index'));
    }
}
