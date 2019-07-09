@extends('template')

@section('include_css')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
    <style>
        th,thead,td{
            border: none !important;
        }
        thead{
            text-transform: uppercase;
        }
        .fc-ltr .fc-basic-view .fc-day-top .fc-day-number{
            width: 100%;
            text-align: center;
            color: #675656;
        }
        .fc th, .fc-basic-view td.fc-week-number, .fc-icon, .fc-toolbar{
            font-weight: normal;
        }
        body{
            margin: 0;
            background: #f9f9f9;
        }
        .titulo{
            text-align: center;
            background: url(http://huaweicollegeonline.com/templates/huawei/images/inicio/barra_superior.png?>);
            margin: 0;
            padding: 21px 0;
        }
        #calendar{
            padding: 20px;
            /* box-shadow: 0px 2px 14px 3px #ccc; */
        }
        .fc-toolbar .fc-left{
            width: 100%;
            text-align: center;
            margin: 10px 0 15px;
        }
        .fc-toolbar h2{
            width: 100%;
        }
        .fc-toolbar .fc-right{
            width: 100%;
            text-align: center;
        }
        .fc-button-group{
            float: right !important;
        }
        button.fc-button{
            background: #a2112f !important;
            color: #fff !important;
        }
        .fc-unthemed td.fc-today{
            background: #f5e7ea !important;
        }
        .fc-toolbar.fc-header-toolbar h2{
            text-transform: uppercase;
        }
        .fc-today-button{
            float: left !important;
        }
        .fc-event-container{
            text-align: center;
            color: #a21130; 
        }
        .fc-unthemed .fc-event{
            background: transparent;
            border: 0;
        }
        .fc-unthemed .fc-event .fc-title{
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            color: #a21130;
        }
        .fc-unthemed .fc-event.fc-start .fc-content:before, .fc-unthemed .fc-event-dot.fc-start .fc-content:before{
            display:none;
        }
        .selected-day{
            background: #ccc !important;
        }
        #contenido-resumen{
            padding: 15px;
        }
        .itemE{
            padding: 10px;
            margin: 10px 0;
            background: #ccc;
            border-radius: 10px;
            border: 1px solid #b7b7b7;
            color: #3e3e3e;
        }
        .itemE .tituloE{
            text-transform: uppercase;
            color: #a21130;
        }
        .itemE p{
            margin: 0;
        }
        .subtitle{
            font-size: 15.6px;
        }
    </style>
@endsection



@section('content')
    <div id='calendar'></div>

        <hr>

    <div id="contenido-resumen">
        
    </div>
@endsection



@section('include_js')
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script src="{{ asset('js/es.js') }}"></script>
    <script src="{{ asset('js/jquery-touch.js') }}"></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                lang: 'es',
                height: 'auto',
                events : [
                    @foreach($tasks as $task)
                    {
                        title : '{{ $task->name }}',
                        start : '{{ $task->task_date }}',
                        descripcion: '{{ $task->description }}',
                        fecha: '{{ $task->task_date }}',
                        id: '{{ $task->id }}',
                        classNames: ['{{ $task->id }}']
                        //url : '{{ route('tasks.edit', $task->id) }}'
                    },
                    @endforeach
                ],
                eventClick: function(calEvent, jsEvent, view) {
                    $(".selected-day").removeClass('selected-day');
                    var fecha = calEvent.fecha;
                    
                    $("#contenido-resumen").hide();
                    
                    $.post("getEvents", {_token: $("input[name=_token]").val(), fecha: fecha, id: calEvent.id}, function(response){
                        $("#contenido-resumen").html(response.html);
                        $("#contenido-resumen").slideDown();
                    })
                    
                
                },
                dayClick: function(date, jsEvent, view) {
                    $(".selected-day").removeClass('selected-day');
                    var fecha = date.format();
                    $("#contenido-resumen").hide();

                    $(this).addClass('selected-day');
                    $.post("getEvents", {_token: $("input[name=_token]").val(), fecha: fecha}, function(response){
                        $("#contenido-resumen").html(response.html);
                        $("#contenido-resumen").slideDown();
                    })
                    

                }
            })

            //$(".fc-event-container").html("<span class='fa fa-bookmark'></span>")
        });
    </script>
@endsection