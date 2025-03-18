<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\DatosCliente;
use App\Models\Pedido;



class ClienteController extends Controller
{
    public function formularioCliente(){
        return view('FormularioCliente');
    }

    public function add(DatosCliente $request){
    
        $nuevoCliente = new Cliente;
        $nuevoCliente->nombre =  $request -> nombre;
        $nuevoCliente->telefono =  $request -> telefono;
        $nuevoCliente->tarjetaCredito =  $request -> tarjetaCredito;
    
        $nuevoCliente->save();

        $idCliente = $nuevoCliente->id;

        $totalPedido = session('precioTotal');

        $nuevoPedido = new Pedido;
        $nuevoPedido->clienteId =  $idCliente;
        $nuevoPedido->precioTotal =  $totalPedido;


        $nuevoPedido->save();

        session(['precioTotal' => 0]);

        return redirect()->route('rutaFinPedido');
    }
}


