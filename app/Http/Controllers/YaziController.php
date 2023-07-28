<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yazi;
use App\Models\Kategori;

class YaziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Tüm verileri listeleme işlemi
         $yazi = Yazi::all();
         return view('yazi.index', compact('yazi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriler = Kategori::all(); // Tüm kategorileri ekleme formunda göstermek için alıyoruz
        return view('dashboard', compact('kategoriler'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'baslik' => 'required|string|max:255',
            'icerik' => 'required|string',
            'kategoriID' => 'required|array',
        ]);

          // Formdan gelen verilerle yeni yazı oluşturma işlemleri burada yapılır
          $yazi = new Yazi();
          $yazi->baslik = $request->input('baslik');
          $yazi->icerik = $request->input('icerik');
          $yazi->kategoriID = $request->input('kategoriID');
          $yazi->save();

          return redirect()->route('yazi.index')->with('success', 'Yeni yazı başarıyla oluşturuldu.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('yazi.details');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $yazi = Yazi::findOrFail($id);
        return view('yazi.edit', compact('yazi'));

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
        $yazi = Yazi::findOrFail($id);

        // Veri güncelleme işlemleri burada yapılır
         $yazi->baslik = $request->baslik;
        $yazi->icerik = $request->icerik;

          $yazi->save();

        return redirect()->route('yazi.index')->with('success', 'Yazı başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
