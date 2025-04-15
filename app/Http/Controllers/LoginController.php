<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return [
            'user' => ['id' => 1,
                        'name' => 'igor antonio'
                    ] 
        ];
    }
}
