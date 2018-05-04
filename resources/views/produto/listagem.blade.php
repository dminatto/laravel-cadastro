@extends('layout.principal')

@section('conteudo')
@if(empty($produtos))
    <div class="alert alert-danger"> Você não tem nenhum produto cadastrado. </div>
@else
    <h1>Listagem de produtos</h1> 
    @if(old('nome')) 
        <div class="alert alert-success"> 
            <strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado. 
        </div> 
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço Unitário</th>
                <th scope="col">Características</th>
                <th scope="col"></th>
            </tr>
        </thead>
    <tbody>
    @foreach ($produtos as $p)
            <tr> 
                <td>{{$p->id}}</td> 
                <td>{{$p->nome}}</td> 
                <td>{{$p->preco_unitario}}</td> 
                
                <td> <a href="{{action('ProdutoCaracteristicaController@exibir', $p->id)}}"> Detalhe</a> </td> 
                <td> <a href="{{action('ProdutoController@remove', $p->id)}}"> Remove</a> </td> 
            </tr> 
    @endforeach
    </table>
@endif
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @yield("modal_conteudo")
</div>
@stop
