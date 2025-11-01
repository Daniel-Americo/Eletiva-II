<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\produto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Pedido;
use App\Models\ItensPedido;

class CarrinhoController extends Controller
{
    public function mostrarProdutos(){
        $produtos = Produto::all();
        return view('welcome', comapct('produtos'));
    }

    public function adicionarCarrinho(int $id){
        $user = Auth::user(); //pegou usario logado
        $produto = Produto::findOrFail($id); 
        $pedido = Pedido::firstOrCreate([
            'user_id' => $user->id,
            'status' => 'aberto'
        ], ['total' => 0]);
        $item = $itensPedido::Where('pedido_id', $pedido->id)->where('produto_id', $id)->first();
        if($item){
            $item->quantidade += 1;
            $item->save(); //salva no banco de dados
        }else {
            itensPedido::create([
                'pedido_id' => $pedido->id,
                'produto_id' => $id,
                'quantidade' => 1,
                'preco' => $produto->valor
            ]);
        }
        $pedido->total = itensPedido::where('pedido_id', $pedido->id)-> sum(DB::raw('quantidade * preco'));
        $pedido->save();
        return redirect('inicial-cli');

    }

    public function removerCarrinho($id){
        $pedido = Pedido::Where('user_id', Auth::id())->where('status', 'aberto')
        ->first();
        $item = Itenspedido::where('id', $id);
        if($item){
            if($item->quantidade ==1)
                $item->delete();
            else {
                $item->quantidade-= 1;
                $item->save();
            }
        }
    }

    public function fecharPedido(){

    }
}
