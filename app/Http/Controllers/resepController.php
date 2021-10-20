<?php

namespace App\Http\Controllers;

use App\Models\katagori;
use App\Models\resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $katagori = DB::table('katagoris')->get();
        $resep = DB::table('reseps')->get();
        return view('content.dashboard', compact([
            'katagori',
            'resep',
        ]));
    }

    public function index_katagori()
    {
        $katagori = DB::table('katagoris')->get();
        return view('content.katagori', compact([
            'katagori',
        ]));
    }

    public function lihat_katagori($katagori)
    {
        $lihat = DB::table('reseps')
            ->where('katagori_makanan', $katagori)
            ->get();

        return view('content.detail_katagori', compact([
            'lihat',
        ]));
    }

    public function lihat_resep(resep $resep)
    {

        return view('content.detail_resep', compact([
            'resep',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_resep(Request $request)
    {

        resep::create([
            'jenis_makanan' => $request->jenis_makanan,
            'katagori_makanan' => $request->katagori_makanan,
            'bahan_makanan' => $request->bahan_makanan,
        ]);
        return redirect('/');
    }

    public function store_katagori(Request $request)
    {
        katagori::create([
            'katagori' => $request->katagori,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/master-katagori');
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
    public function edit_katagori(katagori $katagori)
    {
        return view('content.edit_katagori', compact([
            'katagori',
        ]));
    }

    public function edit_resep(resep $resep)
    {
        $katagori = DB::table('katagoris')->get();
        return view('content.edit_resep', compact([
            'katagori',
            'resep',
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_katagori(Request $request, $id)
    {
        $edit = katagori::findorfail($id);
        $update = [
            'katagori' => $request->katagori,
            'keterangan' => $request->keterangan,
        ];
        $edit->update($update);
        return redirect('/master-katagori');
    }

    public function update_resep(Request $request, $id)
    {
        $edit = resep::findorfail($id);
        $update = [
            'jenis_makanan' => $request->jenis_makanan,
            'bahan_makanan' => $request->bahan_makanan,
            'katagori_makanan' => $request->katagori_makanan,
        ];
        $edit->update($update);
        return redirect('/');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_katagori(katagori $id)
    {
        katagori::destroy($id->id);
        return redirect('/master-katagori');
    }

    public function destroy_resep(resep $id)
    {
        resep::destroy($id->id);
        return redirect('/');
    }
}
