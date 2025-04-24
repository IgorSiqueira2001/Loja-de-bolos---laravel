<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Cake;

class listagemBolos extends Controller
{
    public function getCakes(): View
    {
        $cakes = Cake::all();     
        return view('ListagemDeBolos.listagemDeBolos', ['cakes' => $cakes]);
    }

    public function deleteCakes($id){
        $cake = Cake::find($id);

        if ($cake) {
            $cake->delete();
            return redirect()->back()->with('success', 'Bolo deletado com sucesso!');
        }
    
        return redirect()->back()->with('error', 'Bolo não encontrado!');
    }

}
