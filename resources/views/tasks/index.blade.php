<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Document</title>
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
            background: #a2112f;
            color: #fff;
        }
    </style>
</head>
<body>
    
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

<!--<h1 class="titulo">Eventos</h1>-->

<div id='calendar'></div>

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
                    url : '{{ route('tasks.edit', $task->id) }}'
                },
                @endforeach
            ]
        })
    });
</script>

</body>
</html>