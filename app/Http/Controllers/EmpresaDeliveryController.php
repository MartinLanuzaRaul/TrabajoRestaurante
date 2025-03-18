<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpresaDelivery;


class EmpresaDeliveryController extends Controller
{
    public function indice(){

        $empresas = EmpresaDelivery::paginate(5);

        return view('indiceEmpresas', ['empresas' => $empresas]);
    }

    public function formulario(){

        $empresas = EmpresaDelivery::all();

        return view('FormularioCliente', ['empresas' => $empresas]);
    }
}
