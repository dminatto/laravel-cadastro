<?php 

namespace estoque\Http\Controllers;
use estoque\Http\Requests\ProdutoCaracteristicaRequest;

use DB;
use Request;
use estoque\Produto;
use estoque\ProdutoCaracteristica;

    class ProdutoCaracteristicaController extends Controller {

     public function mostra(){
            
        $id = Request::input('id', '0');
            
        $resposta = DB::select('select * from produtos where id = ?', [$id]);
            
        if(empty($resposta)) {
            return "Esse produto não existe"; 
            } 
        return view('detalhes')->with('p', $resposta[0]);

        }

        public function novo() {
            return view('produto.detalhes'); 
        }

        public function adiciona(){

            ProdutoCaracteristica::create(Request::all());

            return redirect() ->action('ProdutoController@lista');
                         ///     ->withInput(Request::only(''));

        }

        public function exibir($id){
            $produto = Produto::find($id); 
          //  $resposta = DB::select('select * from produto_caracteristicas where id_produto = ?', [$id]);
          return view('produto.detalhes')->withProdutos($produto);
          
        }

}


