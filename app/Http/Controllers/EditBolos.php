<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cake;

class EditBolos extends Controller
{
    public function show($id): View
    {
        $cake = Cake::find($id);
        return view('CadastroDeBolo.CadastroDeBolo', ['cake' => $cake]); //['produtos' => $produtos]//);
    }
    
    public function editCakes(StoreUserRequest $request, $id){
        DB::beginTransaction();
        try{
            $cake = Cake::find($id);
            $cake->name = $request->validated('name');
            $cake->price = $request->validated('price');
            $cake->save();
            DB::commit();
            return redirect()->back()->with('success', 'Bolo alterado com sucesso!');
        } catch(\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao alterar bolo: ' . $e->getMessage());
        }
        return redirect()->back()->with('success', 'Bolo alterado com sucesso!');
    }
}
