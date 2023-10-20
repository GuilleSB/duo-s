<?php
    @$whatsapp = $_POST ['whatsapp'];
    @$name = $_POST ['recname'];
    @$friend = $_POST ['friendname'];

    @$recommend = 'quiero recomendarte esta página, allí puedes consultar servicios o publicitar su empresa de forma gratuita';
    @$link = 'https://duo-s.com/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomiende a un amigo</title>
    <link rel="stylesheet" href="./_css/bootstrap.min.css">
    <link rel="shortcut icon" href="./_images/favicon.png">
    <style>
        body{
            width:auto;
            font-family:"Century Gothic";
            font-weight:300;
        } 
        .body{
            background:#344767;
        }
        .square{
            text-align:center;
        }
        .rec{
            background:#fff;
            color:#344767;
            border:1px #ccc solid;
            font-size:20px;
            display:block;
            margin:auto;
            position:relative;
            top:200px;
            width:300px;
            border-radius:10px;
            padding:30px 0px;
        }    
        .rec>.btn{
            width:210px;
            display:block;
            margin:auto;
        }
        .rec>.btn-success{
            background-image: linear-gradient(310deg,#17ad37,#98ec2d);
            position:relative;
        }
        .rec>.btn-success:hover{
            background:#1ebea5;
        }
        .rec>.btn-warning{
            background-image: linear-gradient(310deg,#2152ff,#21d4fd);
            position:relative;
            top:10px;
        }
    </style>
</head>
<body class="body">
    <div class="square">
        <div class="rec">Hola <?php echo $name;?>, el número de <?php echo $friend; ?> es: <?php echo $whatsapp;?><br><br>
            <a href="https://api.whatsapp.com/send?phone=506<?php echo $whatsapp; ?>&text=Hola, <?php echo $friend; ?> %20soy%20 <?php echo $name; ?> <?php echo $recommend; ?> <?php echo $link; ?>" target="a_link" class="btn btn-success btn-block"><i class="fa fa-whatsapp"></i>Recomendar página</a>
            <a href="./index.php#recommend" class="btn btn-warning btn-block">Volver</a>
        </div>        
    </div>    
</body>
</html>