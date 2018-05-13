@extends('principal')

@section('titulo')

<link href="/css/custom.css" rel="stylesheet">

@stop

@section('conteudo')


<!-- Header -->
<div class="w3-container container-top-page" id="showcase">
  <h1 class="w3-x-jumbo"><b>Cadastro</b></h1>
  <h1 class="w3-xxlarge w3-text" id="top-page"><b>Anel</b></h1>
  <hr class="w3-round">
</div>

<!-- Form -->
<div class="form-page">
  <form class="w3-container" action="{{route ('anel.store')}}" method="post">

    <input name="_token" type="hidden" value=" {{ csrf_token() }} "/>

    <div class="form-group">
      <label class="w3-text"><b>Nome</b></label>
      <input name="nome" class="w3-input w3-border" type="text">
    </div>

    <div class="form-group">
      <label class="w3-text"><b>Tarifa</b></label>
      <input name="tarifa" class="w3-input w3-border" type="text">
    </div>

    <button class="w3-btn w3-blue" id="btn-page" type="submit">Cadastrar</button>
  </form>
</div>

<!-- Padding -->
<div class="w3-light-grey w3-container w3-padding-24"><p class="w3-right">Powered by Wizzle &copy</p></div>

@stop