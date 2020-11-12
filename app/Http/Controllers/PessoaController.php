<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Pessoa;



class PessoaController extends Controller
{

    public function index()
    {
      $pessoas = Pessoa::all();

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
    public function edit($id)
    {
        //
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
        //
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
