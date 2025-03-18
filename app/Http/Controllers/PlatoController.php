<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;


class PlatoController extends Controller
{
    public function indice(){

        $platos = plato::paginate(5);

        return view('indicePlatos', ['platos' => $platos]);
    }
}
