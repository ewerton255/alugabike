@extends('template')

@section('conteudo')
<form method="POST" action="{{route('logar')}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe seu e-mail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha:</label>
    <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Informe sua senha">
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
@stop