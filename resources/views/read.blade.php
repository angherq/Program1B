<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Jaguar Labs Test</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <div class="container">
        @if($data)
            <div class="row">
                <h4>Datos en el archivo <i> {{$filename}} </i>: </h4>
            </div>
            <table>
                @foreach($data as $value)
                <tr> 
                    <td>{{$value}}</td> 
                </tr>
                @endforeach
            </table>
            <br>
            <a href="{{url('/')}}"><button type="button" class="btn btn-primary" form="myForm">Regresar</button></a>
        @else 
            <div class="row">
                <span>El archivo no existe, haz click aqui para <a href="{{ redirect()->getUrlGenerator()->previous() }}"> regresar </a> </span>
            </div>
        @endif
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        </script>
    </body>
    
</html>
