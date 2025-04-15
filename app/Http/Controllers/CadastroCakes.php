<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Cake;

class CadastroCakes extends Controller
{
    public function show(): View
    {
        return view('CadastroDeBolo.CadastroDeBolo'); //['produtos' => $produtos]//);
    }

    public function createCakes(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $cake = Cake::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
        ]);

        return redirect()->back()->with('success', 'Bolo cadastrado com sucesso!');
    }
}
