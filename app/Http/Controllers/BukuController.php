<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data_buku = \App\Buku::all();
        return view('Buku.index',['data_buku' => $data_buku]);

    }
    public function create(Request $request)
    {
        \App\Buku::create($request->all());
        return redirect('/buku');
    }
    public function edit($id)
    {
        $data = \App\Buku::find($id);
        return view('Buku.edit',['data'=>$data]);
    }
    public function update (Request $request, $id)
    {
        $buku= \App\Buku::find($id);
        $buku->update($request->all());
        return redirect('/buku');
    }

    public function delete($id)
    {
        $buku = \App\Buku::find($id);
        $buku->delete();
        return redirect('buku');
    }

}
