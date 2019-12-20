<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::orderBy('id','DESC')->get();
        return view('site.pages.categoria.categoria')->with('categorias', $categorias);
    }

    public function store(Request $req)
    {
        $verificaCategoria = Categoria::where('categorias', $req->categorias)->count();
        
        if($verificaCategoria)
            return redirect()->back()->with("error", "Esta categoria já foi cadastrada!");

        Categoria::create($req->except("_token", "enviar"));
        return redirect()->back()->with("message", "A categoria foi cadastrada com sucesso!");
    }

    public function edit($id)
    {
        $categoria = Categoria::FindOrFail($id);
        return view('site.pages.categoria.editCategoria')->with('categoria', $categoria);
    }

    public function update(Request $req, $id)
    {
        Categoria::FindOrFail($id)->update($req->all());
        return redirect('categoria')->with('message', "A categoria foi editada com sucesso!");
    }

    public function destroy($id)
    {
        Categoria::FindOrFail($id)->delete();
        return redirect()->back()->with("message", "A categoria foi deletada com sucesso!");
    }
}
