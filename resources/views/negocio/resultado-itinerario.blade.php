@extends('principal')

@section('titulo')

<link href="/css/custom.css" rel="stylesheet">

@stop

@section('conteudo')
<!-- Header -->
<div class="w3-container container-top-page" id="showcase">
  <h1 class="w3-x-jumbo"><b>Localizar Ônibus</b></h1>
  <h1 class="w3-xxlarge w3-text" id="top-page"><b>Por Linha</b></h1>
  <hr class="w3-round">
</div>

<br>

Segue abaixo as informações do ônibus mais perto de você: <br><br>

@if ($selectPegarParadaAtual->tempo <= 10)
  <b>Parada Atual:</b> Garagem<br>
@else
  <b>Parada Atual:</b> {{ $selectPegarParadaAtual->nome }}<br>
@endif

<b>Endereço:</b> {{ $selectPegarParadaAtual->endereco_completo }}<br>
<b>Ônibus:</b> {{ $selectPegarParadaAtual->onibus_nome }}<br>
@if ($selectPegarParadaAtual->tempo <= 10)
  <b style="color:red;">O ônibus encontra-se na garagem. Aguarde sua saída.</b><br><br>
@else
<b>Previsão para chegar na parada em que você está:</b> {{ $contadorNovoTempo }} minutos<br><br>
@endif

<form class="w3-container" action="{{ action('OnibusItinerarioController@voltarParaConsultaItinerario') }}" method="get">
  <button class="w3-btn w3-blue" id="btn-page" type="text">Voltar</button>
</form>

<style>
  
/* --------------- START OF HELP TIP --------------- */
.help-tip{
  position: relative;
  top: -347px;
  right: -135px;
  text-align: center;
  background-color: #BCDBEA;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  font-size: 14px;
  line-height: 26px;
  cursor: default;
}

.help-tip:before{
  content:'?';
  font-weight: bold;
  color:#fff;
}

.help-tip:hover p{
  display:block;
  transform-origin: 100% 0%;

  -webkit-animation: fadeIn 0.3s ease-in-out;
  animation: fadeIn 0.3s ease-in-out;

}

.help-tip p{    /* The tooltip */
  display: none;
  text-align: left;
  background-color: #1E2021;
  padding: 20px;
  width: 300px;
  position: absolute;
  border-radius: 3px;
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
  right: -4px;
  color: #FFF;
  font-size: 13px;
  line-height: 1.4;
}

.help-tip p:before{ /* The pointer of the tooltip */
  position: absolute;
  content: '';
  width:0;
  height: 0;
  border:6px solid transparent;
  border-bottom-color:#1E2021;
  right:10px;
  top:-12px;
}

.help-tip p:after{ /* Prevents the tooltip from being hidden */
  width:100%;
  height:40px;
  content:'';
  position: absolute;
  top:-40px;
  left:0;
}

.help-tip:hover p{
  display:block;
  transform-origin: 100% 0%;
  
  -webkit-animation: fadeIn 0.3s ease-in-out;
  animation: fadeIn 0.3s ease-in-out;
      z-index: 999;
}

.info, .success, .warning, .error, .validation {
  border: 1px solid;
  margin: 10px 0px;
  padding: 15px 10px 15px 50px;
  background-repeat: no-repeat;
  background-position: 10px center;
}

.success {
  color: #4F8A10;
  background-color: #DFF2BF;
  background-image: url("/images/ok.png");
}

.error {
  color: #D8000C;
  background-color: #FFBABA;
  background-image:  url("/images/cancel.png");
}

/* CSS animation */

@-webkit-keyframes fadeIn {
  0% { 
      opacity:0; 
      transform: scale(0.6);
  }

  100% {
      opacity:100%;
      transform: scale(1);
  }
}

@keyframes fadeIn {
  0% { opacity:0; }
  100% { opacity:100%; }
}

/* --------------- END OF HELP TIP --------------- */
</style>

@stop