<?php 

namespace estoque\Http\Controllers;
use estoque\Http\Requests\ProdutoRequest;

use DB;
use Request;
use estoque\Produto;

    class ProdutoController extends Controller {

        public function lista() { 
            $produtos = Produto::all();
            return view('produto.listagem')->withProdutos($produtos);
        }

        public function novo() {
            return view('produto.formulario'); 
        }

        public function adiciona(){

            Produto::create(Request::all());

            return redirect() ->action('ProdutoController@lista') 
                              ->withInput(Request::only('nome'));

        }

        public function remove($id){ 
            $produto = Produto::find($id); 
            $produto->delete(); 
            
            return redirect() ->action('ProdutoController@lista');

        }

    }