@extends('layout')



@section('conteudo')
<form method="post">
<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control"></input>
</div>

<button class="btn btn-primary"> Adicionar</button>
</form>
@endsection