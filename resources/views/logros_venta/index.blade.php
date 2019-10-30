@extends('template')

@section('include_css')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
<style>
.content-card {
    margin-top: 40px;
    background: #fff;
    box-shadow: 4px 4px 14px 2px #ccc;
}

.content-card .header {
    text-align: center;
    font-weight: bold;
    padding: 15px 0;
    border-bottom: 1px solid #ccc;
    font-size: 15px;
}

.content-card .body {
    padding: 15px;
}

.content-card .content-form {
    border-bottom: 1px solid #ccc;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
    border-radius: 10px;
    margin: 25px 0;
}

.content-card .label {
    font-weight: bold;
}

.content-card .desc {}

.estadisticas {
    margin-top: 35px;
}

.estadisticas h2 {
    font-size: 15px;
    font-weight: bold;
    text-transform: uppercase;
}

#chart_div {
    width: 100%;
    overflow: auto;
}

.resultados .descripcion {
    padding: 15px;
    text-align: center;
}

.resultados .descripcion .icono {
    font-size: 25px;
    color: #a21130;
}

.resultados .descripcion .des {
    padding: 7px 0 0 0;
    font-weight: bold;
}

.resultados .resultado {
    display: flex;
    align-items: center;
    justify-content: center;
}

.resultados .resultado .valor {
    font-size: 3em;
    font-weight: bold;
}
</style>
@endsection



@section('content')
<div>
    <h2 class="text-center">Logros en venta</h2>
    <div class="form-group">
        <label for="example-text-input" class="col-form-label">Seleccionar criterio de búsqueda</label>
        <select name="" id="filtro" class="form-control">
            <option value="0">Seleccione una opción</option>
            <option value="1">Porcentaje de ventas por categoria</option>
            <option value="2">Porcentaje de ventas por lineas.</option>
            <option value="3">Ranking (# estrellas)</option>
            <option value="4">Por fechas</option>
            <option value="5">Porcentaje de ventas ponderado, calificación</option>
            <option value="6">Por tendencias historicas.</option>
        </select>
    </div>
</div>

<div id="content_1" class="control" style="display: none">
    <div class="content-card">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-chart-line icono"></i>
                </div>
                <div class="des">CATEGORIA 1</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">78%</div>
            </div>
        </div>
    </div>
    <div class="content-card">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-chart-line icono"></i>
                </div>
                <div class="des">CATEGORIA 2</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">50%</div>
            </div>
        </div>
    </div>
    <div class="content-card">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-chart-line icono"></i>
                </div>
                <div class="des">CATEGORIA 3</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">90%</div>
            </div>
        </div>
    </div>
    <div class="content-card">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-chart-line icono"></i>
                </div>
                <div class="des">CATEGORIA 4</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">98%</div>
            </div>
        </div>
    </div>
</div>

<div id="content_2" class="control" style="display: none">
    <div class="content-card">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-chart-line icono"></i>
                </div>
                <div class="des">LINEA 1</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">78%</div>
            </div>
        </div>
    </div>
    <div class="content-card">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-chart-line icono"></i>
                </div>
                <div class="des">LINEA 2</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">50%</div>
            </div>
        </div>
    </div>
    <div class="content-card">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-chart-line icono"></i>
                </div>
                <div class="des">LINEA 3</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">90%</div>
            </div>
        </div>
    </div>
    <div class="content-card">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-chart-line icono"></i>
                </div>
                <div class="des">LINEA 4</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">98%</div>
            </div>
        </div>
    </div>
</div>

<div id="content_3" class="control" style="display: none">
    <div class="content-card">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-trophy icono"></i>
                </div>
                <div class="des">Posición 5</div>
            </div>
            <div class="col-6 col-md-6 resultado" style="color: #a9ad00">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star-half-alt"></span>
            </div>
        </div>
    </div>
</div>


<div id="content_4" class="control" style="display: none">
    <table class="table text-center table-bordered " style="background: #fff">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Mes/Año</th>
                <th scope="col">Porcentaje</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 12; $i++) <tr>
                <td>{{ "$i/2019" }}</td>
                <td>{{ rand(80, 100) }}%</td>
                </tr>
                @endfor
        </tbody>
    </table>
</div>

<div id="content_5" class="control" style="display: none">
    <div class="content-card">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-chart-line icono"></i>
                </div>
                <div class="des">% Ponderado</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">75%</div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="row resultados">
            <div class="col-6 col-md-6 descripcion">
                <div>
                    <i class="fa fa-chart-line icono"></i>
                </div>
                <div class="des">% Calificación</div>
            </div>
            <div class="col-6 col-md-6 resultado">
                <div class="valor">85%</div>
            </div>
        </div>
    </div>
</div>


<div  id="content_6" class="content-card control estadisticas" style="display: none">
    <div class="header">
        Histórico de tendecias
    </div>
    <div class="body">
        <div id="chart_div"></div>
    </div>
</div>

@endsection



@section('include_js')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
$(document).on("change", "#filtro", function() {
    let id = $(this).val();
    $(".control").hide();
    setTimeout(function() {
        $("#content_" + id).show();
    }, 500);

})

$(function() {
    google.charts.load('current', {
        packages: ['corechart', 'bar']
    });
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

        var data = new google.visualization.DataTable();
        data.addColumn('timeofday', 'Time of Day');
        data.addColumn('number', 'Motivation Level');

        data.addRows([
            [{
                v: [8, 0, 0],
                f: '8 am'
            }, 1],
            [{
                v: [9, 0, 0],
                f: '9 am'
            }, 2],
            [{
                v: [10, 0, 0],
                f: '10 am'
            }, 3],
            [{
                v: [11, 0, 0],
                f: '11 am'
            }, 4],
            [{
                v: [12, 0, 0],
                f: '12 pm'
            }, 5],
            [{
                v: [13, 0, 0],
                f: '1 pm'
            }, 6],
            [{
                v: [14, 0, 0],
                f: '2 pm'
            }, 7],
            [{
                v: [15, 0, 0],
                f: '3 pm'
            }, 8],
            [{
                v: [16, 0, 0],
                f: '4 pm'
            }, 9],
            [{
                v: [17, 0, 0],
                f: '5 pm'
            }, 10],
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
