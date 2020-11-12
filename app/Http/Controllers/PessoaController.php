<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;



class PessoaController extends Controller
{

    public function index()
    {
      $pessoas = DB::table('pessoas')->join('categorias', 'categorias.id', '=', 'pessoas.categoria_id')->select('pessoas.*', 'categorias.nome as nomeCategoria')->get();


      return view('pessoas/index',[
        'pessoas' => $pessoas,
      ]);

    }


    public function create()
    {
      $categorias = Categoria::all();

      return view('pessoas/create', [
        'categorias' => $categorias,
      ]);
    }


    public function store(Request $request)
    {

      $data = request()->validate([
        'nome' => ['required','string', 'max:100'],
        'email' => ['required','email'],
        'categoria' => ['required','string', 'max:100'],
      ]);

      Pessoa::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'categoria_id' => $request->categoria,
      ]);

      return redirect('pessoas');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

      $pessoa = DB::table('pessoas')->join('categorias', 'categorias.id', '=', 'pessoas.categoria_id')->select('pessoas.*', 'categorias.nome as nomeCategoria')->where('pessoas.id', '=', $id)->get();
      $categorias_restantes =  DB::table('categorias')->where('categorias.id', '!=', $pessoa[0]->categoria_id)->get();

      return view('pessoas/edit',[
        'pessoa' => $pessoa[0],
        'categorias' => $categorias_restantes,
      ]);
    }


    public function update(Request $request, $id)
    {
      $data = request()->validate([
        'nome' => ['required','string', 'max:100'],
        'email' => ['required','email'],
        'categoria' => ['required','string', 'max:100'],
      ]);

      $pessoa = Pessoa::findOrFail($id);

      $pessoa->update([
        'nome' => $request->nome,
        'email' => $request->email,
        'categoria_id' => $request->categoria,
      ]);

      return redirect('pessoas');
    }

    public function destroy($id)
    {
      $pessoa = Pessoa::findOrFail($id);
      $pessoa->delete();

      return redirect('pessoas');
    }
}
