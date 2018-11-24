<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\Berita;
use App\Kategori;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('Admin.child.berita.index')->with('berita', $berita);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function create()
    {
        $kategori = Kategori::all();
        return view('Admin.child.berita.create')->with('kategori', $kategori);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori_id' => 'required|string',
            'judul_berita' => 'required|string|max:50',
            'keterangan'  => 'required|string',
            'tanggal_berita' => 'required|date',
            'foto' => 'image',

        ]);

        if ($validator->fails()) {
            return redirect(route('berita.create'))->withErrors($validator)->withInput();
        }

        $newberita  = new Berita();

        $data = $request->all();

        $newberita->fill($data);

        if ($request->has('foto')) {
            $path = $request->foto->store('public/uploads');
            list($tmp, $filename) = explode('public/', $path);
            $newberita->foto = $filename;
        }

        $newberita->slug = str_slug($newberita->judul_berita);

        $sukses = $newberita->save();

        if ($sukses) {
            return redirect('admin/berita');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        $kategori = Kategori::all();
        return view('Admin.child.berita.edit', ['berita' => $berita])->with('kategori', $kategori);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);

        $data = $request->all();

        $berita->fill($data);

        if ($request->has('foto')) {
            $path = $request->foto->store('public/uploads');
            list($tmp, $filename) = explode('public/', $path);
            $berita->foto = $filename;

        }

       $sukses =  $berita->save();
       if ($sukses) {
            return redirect('admin/berita');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);

        $sukses = $berita->delete();
        if ($sukses) {
            return redirect('admin/berita');
        }
    }
}
