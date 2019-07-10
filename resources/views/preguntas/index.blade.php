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
  .transicion{
    color: #000;
    bottom: 20px;
    position: absolute;
  }
</style>
@endsection

@section('content')

<h3 class="kt-portlet__head-title title">
  Cuestionario
</h3>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
   
    @foreach($formularios as $formulario)
    <div class="carousel-item {{ ($active === true)? $active = 'active' : '' }}">
      {!! $formulario !!}
    </div>
    @endforeach
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="fa fa-chevron-left fa-2x transicion" aria-hidden="true"></span>    
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="fa fa-chevron-right fa-2x transicion" aria-hidden="true"></span>    
  </a>
</div>
@endsection

@section('include_js')
    <script>
        $(function(){
            $('.carousel').carousel({
                interval: false
            })
        })
        
    </script>
@endsection