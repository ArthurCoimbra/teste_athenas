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
