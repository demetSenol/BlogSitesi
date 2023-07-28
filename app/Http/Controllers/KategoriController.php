<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriler = Kategori::all();

        // Kategorileri blade dosyasına gönderiyoruz ve view'ı döndürüyoruz
        return view('kategori.index', compact('kategoriler'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'kategoriAdi' => 'required|max:50',
        ]);

        $kategori = new Kategori();
        $kategori->kategoriAdi = $request->input('kategoriAdi');
        $kategori->save();

        return redirect()->route('kategori.create')->with('success', 'Kategori başarıyla oluşturuldu.');




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
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return abort(404);
        }

        return view('kategori.edit', compact('kategori'));
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
        $kategori = Kategori::find($id); // Güncellenecek kategoriyi veritabanından çekiyoruz.


        if (!$kategori) {
            return abort(404);
        }


        $kategori->kategoriAdi = $request->input('kategoriAdi');
        $kategori->save();


        return redirect()->route('kategori.index')->with('success', 'Kategori başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $kategori = Kategori::findOrFail($id);
        $kategori->delete();



        return redirect()->route('kategori.index')->with('success', 'Kategori silindi.');
    }
}
