@extends('Site.templates.template')
@section('content')
@include('Site.includes.navbar')
  <div class="container">
    <div class="row">
      <div class="col-md-19 text-center">
        <img width="30%" height="30%" src="{{url('assets/Site/img/meucondominio.png')}}" align="left-botton">
        <p class="text-inverse">
          <b style="color: black">Seu condomínio a um clique de você.</b>
        </p>
        <ul class="text-center">
          <h3>Ordem de Serviço</h3>
        </ul>
        <ul class="text-center col-md-12">
          <h1>
            <font color="blue"></font>
            <div class="col-md-4 meio" style="background-color:orange">
              <h2 style="color:black">
                <a href="{{route('os.lista',Auth::user()->id)}}"><b style="color: black">Minhas Ordens de Serviço</b></a>
              </h2>
            </div>
          </h1>
        </ul>
      </div>
    </div>
  </div>
  <style type="text/css">
    .meio{
      margin-left: 32%;
    }
  </style>
@endsection
