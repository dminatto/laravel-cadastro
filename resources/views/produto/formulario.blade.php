@extends('layout.principal')
@section('conteudo')

<h1>Novo produto</h1>

<div class="form-group">

<form  action="adiciona" method="post">
<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <div class="row">
    <div class="col">
    <label>Nome</label>
            <input name="nome" type="text" class="form-control">
    </div>
    <div class="col">
    <label>Preço Unitário</label>
            <input name="preco_unitario" type="number" placeholder="0.00" min="0" value="0" step="0.01" class="form-control">
    </div>
  </div>
</form>

    

        <button type="submit" class="btn btn-primary btn-block">Cadastrar</button> 
    </form>
</div>

        

@stop
