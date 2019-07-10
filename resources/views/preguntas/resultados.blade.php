@extends('template')

@section('include_css')
<style>
  .title{
    font-size: 16.6px;
    text-transform: uppercase;
    margin: 15px 0;
    text-align: center;
  }
  .btn-success{
    background-color: #a2112f;
    border-color: #910f2a;
  }
  .m-portlet{
    margin: 0;
  }
  .resultados{
      margin: 10px 0;
  }
  .resultados .m-portlet__body{
    padding: 20px;
  }
  .resultados .m-section{
    margin: 0;
    display: flex;
  }
  .resultados .content-icon{
    justify-content: center;
    align-items: center;
    display: flex;
  }
  .resultados .content-icon .fa{
    font-size: 2em;
    padding: 17px;
    background: #f5e7ea;
    border-radius: 100%;
    color: #A2112F;
  }
  .resultados .m-section__content{
        width: 100%;
        margin: 0;
  }
  .resultados .m-section__sub{
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
  }
  .resultados .calificacion{
    text-align: center;
    font-size: 1.3em;
  }
</style>
@endsection

@section('content')

<h3 class="kt-portlet__head-title title">
  Resultados
</h3>

@foreach($data as $evaluacion)
<div class="m-portlet m-portlet--tab resultados">
    <div class="m-portlet__body">
        <div class="m-section">
            <div class="content-icon">
                <span class="fa fa-medal"></span>
            </div>
            <div class="m-section__content">
                <span class="m-section__sub">
                    {{ $evaluacion["evaluacion"] }}
                </span>
                <p class="calificacion">Calificaci&oacute;n {{ $evaluacion["calificacion"] }} <span class="fa fa-start"></span></p>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection