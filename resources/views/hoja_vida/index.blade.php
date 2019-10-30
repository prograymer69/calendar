@extends('template')

@section('include_css')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
    <style>
        .content-card{
            margin-top: 40px;
            background: #fff;
            box-shadow: 4px 4px 14px 2px #ccc;
        }
        .content-card .header{
            text-align: center;
            font-weight: bold;
            padding: 15px 0;
            border-bottom: 1px solid #ccc;
            font-size: 15px;
        }
        .content-card .body{
            padding: 15px;
        }
        .content-card .content-form{
            border-bottom: 1px solid #ccc;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-radius: 10px;
            margin: 25px 0;
        }
        .content-card .label{
            font-weight: bold;
        }
        .content-card .desc{

        }
        .estadisticas{
            margin-top: 35px;
        }
        .estadisticas h2{
            font-size: 15px;
            font-weight: bold;
            text-transform: uppercase;
        }
        #chart_div{
            width: 100%;
            overflow: auto;
        }
        .resultados .descripcion{
            padding: 15px;
            text-align: center;
        }
        .resultados .descripcion .icono{
            font-size: 25px;
            color: #a21130;
        }
        .resultados .descripcion .des{
            padding: 7px 0 0 0;
            font-weight: bold;
        }
        .resultados .resultado{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .resultados .resultado .valor{
            font-size: 3em;
            font-weight: bold;
        }
        .content-image{
            text-align: center;
        }
        .content-image img{
            max-width: 100px;
            border-radius: 100%;
            box-shadow: 1px 1px 6px 5px #ccc;
        }
    </style>
@endsection



@section('content')

    <div class="content-card control">
        <div class="header">
            INFORMACI&Oacute;N DEL USUARIO
        </div>
        <div class="body">
            <div class="content-image">
                <img src="{{ asset('img/user.svg') }}" alt="">
            </div>

            <div class="content-form">
                <div class="label text-center">Nombre</div>
                <div class="desc text-center">Daniel Calder&oacute;n</div>
            </div>
            <div class="content-form">
                <div class="label text-center">Cargo</div>
                <div class="desc text-center">Director de Tecnolog&iacute;a</div>
            </div>
            <div class="content-form">
                <div class="label text-center">Zona</div>
                <div class="desc text-center">Sistemas</div>
            </div>
            <div class="content-form">
                <div class="label text-center">Ciudad</div>
                <div class="desc text-center">Cali</div>
            </div>
            <div class="content-form">
                <div class="label text-center">Cuenta</div>
                <div class="desc text-center">Cuenta</div>
            </div>
            <div class="content-form">
                <div class="label text-center">Entrenamientos</div>
                <div class="desc text-center">Entrenamientos</div>
            </div>
            <div class="content-form">
                <div class="label text-center">Temas</div>
                <div class="desc text-center">Temas</div>
            </div>
            <div class="content-form">
                <div class="label text-center">Ultimo acceso</div>
                <div class="desc text-center">{{ date('d-M-Y') }}</div>
            </div>
        </div>
    </div>



    <div class="content-card control estadisticas">
        <div class="header">
            ESTAD&Iacute;STICAS
        </div>
        <div class="body">
            <div id="chart_div"></div>
        </div>
    </div>

    <div class="content-card control">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-user-graduate icono"></i>
                </div>
                <div class="des">CONOCIMIENTOS</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">60%</div>
            </div>
        </div>
    </div>

    <div class="content-card control">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-thumbs-up icono"></i>
                </div>
                <div class="des">COMPORTAMIENTO</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">78%</div>
            </div>
        </div>
    </div>

    <div class="content-card control">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-briefcase icono"></i>
                </div>
                <div class="des">PRODUCTO</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">100%</div>
            </div>
        </div>
    </div>

    <div class="content-card control">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-building icono"></i>
                </div>
                <div class="des">PUNTO DE VENTA</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">60%</div>
            </div>
        </div>
    </div>

    <div class="content-card control">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-money-bill-alt icono"></i>
                </div>
                <div class="des">PRECIO</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">60%</div>
            </div>
        </div>
    </div>
@endsection



@section('include_js')
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
    $(document).on("click", ".consultar", function(){
        $(".control").hide();
        setTimeout(function(){
            $(".control").show();
        }, 500);

    })

        $(function(){
            google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Motivation Level');

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, 1],
        [{v: [9, 0, 0], f: '9 am'}, 2],
        [{v: [10, 0, 0], f:'10 am'}, 3],
        [{v: [11, 0, 0], f: '11 am'}, 4],
        [{v: [12, 0, 0], f: '12 pm'}, 5],
        [{v: [13, 0, 0], f: '1 pm'}, 6],
        [{v: [14, 0, 0], f: '2 pm'}, 7],
        [{v: [15, 0, 0], f: '3 pm'}, 8],
        [{v: [16, 0, 0], f: '4 pm'}, 9],
        [{v: [17, 0, 0], f: '5 pm'}, 10],
      ]);

      var options = {
        title: 'Motivation Level Throughout the Day',
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Rating (scale of 1-10)'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));

      chart.draw(data, options);
    }
        })
    </script>
@endsection
