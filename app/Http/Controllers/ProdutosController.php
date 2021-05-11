<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Http\Requests;
use App\Produto;
use app\Http\Requests\ProdutoRequest;
use Symfony\Component\HttpFoundation\Request;

class ProdutosController extends BaseController
{
    public function index() { 
        $produtos = Produto::all();
        return view ('produtos.index', ['produtos'=>$produtos]);
    }

    public function create() { 
        return view('produtos.create');
    }

    public function store(Request $request) {

        $input = $request->all();
        Produto::create($input);
        return redirect()->route('produtos');
    }

    public function destroy($id) {
        Produto::find($id)->delete();
        return redirect()->route('produtos');
    }

    public function edit($id) {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, $id) {
        $produto = Produto::find($id)->update($request->all());
        return redirect()->route('produtos');
    }
}
