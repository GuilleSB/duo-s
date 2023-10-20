<?php
    @$whatsapp = $_POST ['whatsapp'];
    @$whatsappmessage = $_POST ['whatsappmensaje'];
    @$page = $_POST ['page'];

    include $_POST ['page'].'/index.php';
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
            top:150px;
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
        .send_tp{
            width:90%;
            position:relative;
            top:-15px;
            border-radius:5px;
            box-shadow:0 0 20px #333;
        }
    </style>
</head>
<body class="body">
    <div class="square">
        <div class="rec">
            <img class="send_tp" src="./_categories/<?php echo $b_id; ?>.jpg" alt="Tarjeta de <?php echo $b_name; ?>">
            Vas a compartir la tarjeta de <?php echo $b_name;?> al número <?php echo $whatsapp;?><br><br>
            <a href="https://api.whatsapp.com/send?phone=506<?php echo $whatsapp; ?>&text=<?php echo $_POST ['whatsappmensaje'];?>%0A%0Ahttps://duo-s.com/<?php echo $b_id;?>" target="a_link" class="btn btn-success btn-block"><i class="fa fa-whatsapp"></i>Compartir</a>
            <a href="./<?php echo $_POST ['page']?>" class="btn btn-warning btn-block">Volver</a>
        </div>         
    </div>    
</body>
</html>




