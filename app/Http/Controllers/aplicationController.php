<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\employee;

class aplicationController extends Controller
{
    public function showAplication()
    {
        return view('aplication', [
            "tittle" => "aplication"
        ]);
    }
}
