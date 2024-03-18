<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama
        ]);
    }

    public function edit($id)
    {
        $data = KategoriModel::find($id);
        return view('kategori.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        KategoriModel::where('kategori_id', $id)->update([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama
        ]);

        return redirect('/kategori');
    }
    
    public function destroy($id)
    {
        KategoriModel::where('kategori_id', $id)->delete();
        return redirect('/kategori');
    }
}
