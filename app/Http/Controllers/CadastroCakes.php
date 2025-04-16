<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest as RequestsStoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Cake;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\DB;

class CadastroCakes extends Controller
{
    public function show(): View
    {
        return view('CadastroDeBolo.CadastroDeBolo'); //['produtos' => $produtos]//);
    }

    public function createCakes(StoreUserRequest $request){
        DB::beginTransaction();
        try{
            Cake::create($request->validated());
            DB::commit();
            return redirect()->back()->with('success', 'Bolo cadastrado com sucesso!');
        } catch(\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao criar bolo: ' . $e->getMessage());
        }
        return redirect()->back()->with('success', 'Bolo cadastrado com sucesso!');
    }
}
