<?php error_reporting(E_ALL ^ E_NOTICE);?>
<?php error_reporting(E_ALL ^ E_DEPRECATED);?>
<?php require_once 'templates/header.php';?>

<meta http-equiv="refresh" content="60" />
    <div class="content">
        <div class="container">

<style type="text/css">
    body {
    margin-top: 2%
    }   
    .lines_count{float:right;font-size:24px;background:#000;color:#fff;padding:5px 8px;border-radius:50px;}
</style>
    
<?php
    $archivo = "db_data_base.php";
    $lineas = count(file($archivo));
    $total_lineas = $lineas;
    echo "<div class='lines_count'>$total_lineas</div>";
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="input-group">
            <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                <input class="form-control" id="system-search" name="q" placeholder="Buscar">
                <?php include('../count.dat'); echo ' visitas al sitio';?><?php
                    if (isset($_POST['reset'])){
                        $reset = fopen("../count.dat","w");
                        fwrite($reset, "0" . PHP_EOL);
                        fclose($reset);
                    }
                    if (isset($_POST['resetnum'])){
                        $reset = fopen("../count.dat","w");
                        fwrite($reset,  $_POST['reset'] . PHP_EOL);
                        fclose($reset);
                        header('Location:./data_base.php');
                    }
                ?>
                <div class="left">
                    <button data-toggle="modal" data-target="#reset" class="btn btn-default">Reset</button>
                </div>


                <div class="modal fading" id="reset" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <form class="text-center" method="POST" action="data_base.php">
                                    <h4>Esta acción devolverá la cuenta de visitas a 0</h4>
                                    <input class="btn btn-primary" type="submit" name="reset" value="Resetear">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                        <span aria-hidden="true">Cancelar</span><span class="sr-only">Close</span>
                                    </button><br><br>
                                    <h4>También puedes devolver la cuenta a un valor definido:</h4><br>
                                    <h4>Valor actual: <?php include('../count.dat');?></h4>
                                    <input class="btn btn-default" type="number" name="reset" value="<?php include('../count.dat');?>"><br><br>
                                    <button type="submit" class="btn btn-primary" name="resetnum">
                                        <span aria-hidden="true">Actualizar</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                </form> 
                            </div>            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Actividad</th>
                            <th>WhatsApp</th>
                            <th>Ubicación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include('db_data_base.php');?>
                    </tbody>
                </table>   
            </div>
        </div>
    </div>  
    <script type="text/javascript">
    $(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

    //something is entered in search form
    $('#system-search').keyup( function() {
       var that = this;
        // affect all table rows on in systems table
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //Lower text for case insensitive
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //hide rows
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //all tr elements are hidden
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
            });
        }); 
    </script>
</div>