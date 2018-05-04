@extends('layout.principal')
@section('conteudo')

<h1>Detalhamento do Produto</h1>

<div class="form-group">
    <div class="form-group">
        <p>
            <label for="staticEmail" class="col-sm-2 col-form-label">Produto:</label>
            {{$produtos->id}} - {{$produtos->nome}}
        </p>
        <p>
            <label for="staticEmail" class="col-sm-2 col-form-label">Preço Unitário:</label>
            {{$produtos->preco_unitario}}
        </p>

        
        <label for="staticEmail" class="col-sm-2 col-form-label">Preço</label>
        <label for="staticEmail" class="col-sm-2 col-form-label">Peso</label>
        <label for="staticEmail" class="col-sm-2 col-form-label">Densidade</label>
        <label for="staticEmail" class="col-sm-2 col-form-label">Formato</label>
    </div>
</div>

        

@stop
