<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Jaguar Labs Test</title>
        <style>
        </style>
    </head>
    <body>
        <div class="container">
        @if($filename)
        <form id="myForm2" action="{{url('store')}}" method="POST">
            <input type="hidden" name="filename" value="{{$filename}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-xs-6">
                    <label for="amount">Cantidad de numeros para capturar:</label>
                    <input class="form-control" id="amount" type="number">
                </div>
            </div>
            <br>
            <div class="row capture"></div>
            <br>
            <button type="submit" class="btn btn-default">Guardar</button>
        </form>
        @else
            <div class="row">
                <span>Nombre invalido, haz click aqui para <a href="{{ redirect()->getUrlGenerator()->previous() }}"> regresar </a> </span>
            </div>
        @endif
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() { 
                
                $('#amount').on('change', function() {
                    $('.capture').html('');
                    
                    var amount = $('#amount').val(); 
                    
                    for(var i = 0; i < parseInt(amount); i++) {
                        var html  = '<div class="col-xs-6">';
                            html += '<label for="amount">Numero:</label>';
                            html += '<input class="form-control" id="number_'+i+'" name="number_'+i+'" type="number" step="any">';
                            html += '</div>';
                        $('.capture').append(html);
                    }
                });
            });
        </script>
    </body>
</html>
