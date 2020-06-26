<?php

namespace App\Http\Controllers;

use App\Empresa;

use Illuminate\Http\Request;

class controladorEmpresa extends Controller
{
    public function Index(){

        return view('empresa.index')->with(['empresa'=>Empresa::all()]);
    }
    public function create(){
        return view('empresa.create');
    }
    public function store(){
        $empre = Empresa::create(request()->all());
        return redirect()
        ->route('empresa.index');
    }

    public function show($empre){
        return "Mostrando la empresa desde el controlador{$empre}";
    }

    public function edit($empre){
        return view ('empresa.edit')->with(['empresa'=>Empresa::findOrFail($empre),]);
    }
    public function update($empre){
        $empre = Product::findOrFail($empresa);
        $empre->update(request()->all());
        return redirect()
        ->route('empresa.index');

    }

    public function delete($empre){
        $empre =Empresa::findOrFail($empre);
        $empre->delete();
        return redirect()
        ->route('empresa.index');

    }


}
