<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style>
.requests_dates{font-family: arial, sans-serif;text-align: center;}
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

 <?php
    $bsnss=$a_nombre;
    $searchString = " ";
    $replaceString = "";  
    $nospace = str_replace($searchString, $replaceString, $bsnss);
?>

<div class="right">
    <button data-toggle="modal" data-target="#<?php echo $nospace;?>" class="btn btn-default">Eliminar</button>
</div>

<h3 class="requests_dates">Datos para ingresar a <?php echo $a_empresa;?><h3>

<table>
  <tr>
    <th>Dato</th>
    <th>Descripción</th>
  </tr>
  <tr>
    <td>Nombre:</td>
    <td><?php echo $a_nombre;?></td>
  </tr>
  <tr>
    <td>Empresa:</td>
    <td><?php echo $a_empresa;?></td>
  </tr>
  <tr>
    <td>Dirección:</td>
    <td><?php echo $a_direccion;?></td>
  </tr>
  <tr>
    <td>Actividad:</td>
    <td><?php echo $a_actividad;?></td>
  </tr>
  <tr>
    <td>Horario L-V:</td>
    <td><?php echo $a_horariolv;?></td>
  </tr>
  <tr>
    <td>Horario sábado:</td>
    <td><?php echo $a_horarios;?></td>
  </tr>
  <tr>
    <td>Horario domingo:</td>
    <td><?php echo $a_horariod;?></td>
  </tr>
  <tr>
    <td>Teléfono:</td>
    <td><?php echo $a_telefono;?></td>
  </tr>
  <tr>
    <td>WhatsApp:</td>
    <td><?php echo $a_whatsapp;?></td>
  </tr>
  <tr>
    <td>Correo:</td>
    <td><?php echo $a_mail;?></td>
  </tr>
  <tr>
    <td>Facebook:</td>
    <td><?php echo $a_facebook;?></td>
  </tr>
  <tr>
    <td>Detalles:</td>
    <td><?php echo $a_mensaje;?></td>
  </tr>
</table>

<div class="modal fading" id="<?php echo $nospace;?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <form class="text-center" method="POST" action="./<?php echo $a_empresa;?>.php">
                    <h4>Realmente deseas eliminar la solicitud de <?php echo $a_empresa;?>? <br>Esta acción es irreversible!</h4>
                    <input class="btn btn-primary" type="submit" name="reset" value="Sí, borrar">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <span aria-hidden="true">Cancelar</span><span class="sr-only">Close</span>
                    </button><br><br>
                </form> 
                                
                <?php                                
                if (isset($_POST['reset'])){
                    unlink('./'. $a_empresa . '.php');
                    header('Location:../requests.php');
                }                                
                ?>

            </div>            
        </div>
    </div>
</div>