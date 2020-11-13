<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();

        return view('categorias/index',[
          'categorias' => $categorias,
        ]);
    }

    public function create()
    {
        return view('categorias/create');
    }

    public function store(Request $request)
    {
      $data = request()->validate([
        'nome' => ['required','string', 'max:100'],
      ]);

      Categoria::create($data);

      return redirect('categorias');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

        $categoria = Categoria::findOrFail($id);

        return view('categorias/edit',[
          'categoria' => $categoria,
        ]);
    }

    public function update(Request $request, $id)
    {
      $data = request()->validate([
        'nome' => ['required','string', 'max:100'],
      ]);

      $categoria = Categoria::findOrFail($id);

      $categoria->update($data);

      return redirect('categorias');
    }


    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);

        try {
          $categoria->delete();
        } catch (\Exception $e) {
           $error_code = $e->errorInfo[0];
           if($error_code == "23000"){
             return back()->withError("Categoria não pode ser removida pois existem pessoas ligadas à ela.")->withInput();
           }
        }

        return redirect('categorias');
    }
}
