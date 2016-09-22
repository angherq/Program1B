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
            <div class="row">
            <div class="page-header">
                <h2>Jaguar Labs Test <small> - Angel Hernandez</small></h2>
            </div>
            </div>
            <div class="row">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Inciar Test <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                </button>
            </div>
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Ingresa la siguiente informacion</h4>
                    </div>
                    <div class="modal-body">
                        <form id="myForm" action="" method="GET">
                            <div class="form-group">
                                <label for="filename">Nombre del archivo:</label>
                                <input type="text" class="form-control" id="filename">
                            </div>
                            <div class="form-group">
                                <label for="optradio">Modo:</label>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="1">Lectura</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="2">Escritura</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <a id="link" href=""><button type="button" class="btn btn-primary" form="myForm">Continuar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">

            $(document).ready(function() {

                $("input[type='radio']").click(function() {

                    var radioValue = $("input[name='optradio']:checked").val();
                    var filename = $('#filename').val();

                    if (radioValue == 1) {
                        if(filename.length)
                            $("#link").attr("href", "./read/" + filename);
                        else
                            $("#link").attr("href", "./read");
                    }
                    else {
                        if(filename.length)
                            $("#link").attr("href", "./write/" + filename);
                        else
                            $("#link").attr("href", "./write");
                    }
                });                
            });

        </script>
    </body>
    
</html>
