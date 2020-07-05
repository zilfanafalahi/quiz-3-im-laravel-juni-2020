<?php

namespace App\Http\Controllers;

use App\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = ArtikelModel::artikel();
        return view('artikel.artikel', compact('artikel'));
    }

    public function create()
    {
        return view('artikel.form');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $artikel = ArtikelModel::save_artikel($data);
        return redirect('/artikel');
    }

    public function show($id)
    {
        $artikel = ArtikelModel::detail_artikel($id);
        return view('artikel.detail', compact('artikel'));
    }

    public function edit($id)
    {
        $artikel = ArtikelModel::edit_artikel($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $artikel = ArtikelModel::update_artikel($id, $request->all());
        return redirect('/artikel/'. $id);
    }

    public function destroy($id)
    {
        $deleted = ArtikelModel::destroy_artikel($id);
        return redirect('/artikel');
    }
}
