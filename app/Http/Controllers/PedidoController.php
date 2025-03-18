<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Http\Requests\DatosCliente;



class PedidoController extends Controller
{
    public function indice()
    {

        $pedidos = Pedido::latest()->take(10)->get();

        return view('indicePedidos', ['pedidos' => $pedidos]);
    }

    public function finPedido()
    {

        return view('FinPedido');
    }

    public function calcularPrecio($precio)
    {

        if (!session()->has('precioTotal')) {
            session(['precioTotal' => 0]);
        }

        $nuevoTotal = session('precioTotal') + $precio;
        session(['precioTotal' => $nuevoTotal]);

        return redirect()->route('rutaIndicePlato');
    }

    static public function addPedido(DatosCliente $request) {
        $cliente = Cliente::find($request->nombre);
        $idCliente = $cliente->id;

        $totalPedido = session('precioTotal');

        $nuevoPedido = new Pedido;
        $nuevoPedido->clienteId =  $idCliente;
        $nuevoPedido->precioTotal =  $totalPedido;

        $nuevoPedido->save();


        session(['precioTotal' => 0]);
    }
}
