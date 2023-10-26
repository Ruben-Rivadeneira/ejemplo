<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Sistemas de Ecuaciones</title>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <style type="text/css">
        
        .fundo-mod {
            background-color: rgb(23, 162, 184);
        }

        .margem {
            padding: 1%;
            border-radius: 5px;
        }

        .mesmo-tamanho {
            border-radius: 1px;
        }

        .display {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
        }
        #visor{
            font-family: 'Press Start 2P', cursive;
        }
        #historico{
            font-family: 'Press Start 2P', cursive;
        }
        #titulo{
            font-family: 'Lobster', cursive;
        }
        .borda{
            -webkit-box-shadow: 0 3px 9px black;
            box-shadow: 0 3px 9px black;
            border-radius: 3px;
            -webkit-transition: border .2s ease-in-out;
            transition: border .2s ease-in-out;
        }

        .centro {
            width:100%;
            height:100%;
        }
        .credit-card-div  span { padding-top:10px; }
        .credit-card-div img { padding-top:30px; }
        .credit-card-div .small-font { font-size:9px; }
        .credit-card-div .pad-adjust { padding-top:10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12" id="titulo">
                <h3 >Calculadora Sistema de Ecuaciones</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <form action="index.php" method="post" class="credit-card-div">
                <div class="panel panel-default" >
                    <div class="row ">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <span class="help-block text-muted h5">Primera ecuación</span>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <span class="help-block text-muted small-font" > Incógnita x</span>
                            <input type="text" class="form-control" name="a" />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <span class="help-block text-muted small-font" >  Incógnita y</span>
                            <input type="text" class="form-control" name="b" />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <span class="help-block text-muted small-font" >  Coeficiente</span>
                            <input type="text" class="form-control" name="c" />
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <span class="help-block text-muted h5">Segunda ecuación</span>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <span class="help-block text-muted small-font" > Incógnita x</span>
                            <input type="text" class="form-control" name="d" />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <span class="help-block text-muted small-font" >  Incógnita y</span>
                            <input type="text" class="form-control" name="e" />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <span class="help-block text-muted small-font" >  Coeficiente</span>
                            <input type="text" class="form-control" name="f" />
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="row ">
                    <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                        <input type="submit"  class="btn btn-danger" value="CALCULAR" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <form method="post" action="index.php">
        
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];
    $e = $_POST["e"];
    $f = $_POST["f"];

    $denominator = $a * $d - $b * $c;
    if ($denominator == 0) {
        echo "El sistema no tiene solución única.";
    } else {
        $x = ($e * $d - $b * $f) / $denominator;
        $y = ($a * $f - $e * $c) / $denominator;
        echo "La solución es: x = " . $x . ", y = " . $y;
    }
}
?>
</body>
</html>
