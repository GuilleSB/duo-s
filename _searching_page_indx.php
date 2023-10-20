<script>
    var indice = 0;
    enlace = new Array();
    enlace[0] = "<img class='searcher_background' src='./_images/searcher_background_a.jpg' alt='Imagen de fondo 1'>";
    enlace[1] = "<img class='searcher_background' src='./_images/searcher_background_b.jpg' alt='Imagen de fondo 2'>";
    enlace[2] = "<img class='searcher_background' src='./_images/searcher_background_c.jpg' alt='Imagen de fondo 3'>";
    enlace[3] = "<img class='searcher_background' src='./_images/searcher_background_d.jpg' alt='Imagen de fondo 4'>";
    enlace[4] = "<img class='searcher_background' src='./_images/searcher_background_e.jpg' alt='Imagen de fondo 5'>";
    enlace[5] = "<img class='searcher_background' src='./_images/searcher_background_f.jpg' alt='Imagen de fondo 6'>";
    enlace[6] = "<img class='searcher_background' src='./_images/searcher_background_g.jpg' alt='Imagen de fondo 7'>";
    enlace[7] = "<img class='searcher_background' src='./_images/searcher_background_h.jpg' alt='Imagen de fondo 8'>";
    
    
    enlace.sort(function(){
    return Math.random() - Math.random();})
    indice = Math.random() * (enlace.length);
    indice = Math.floor(indice);
    for (i=1;i<=1;i++) {
    if (indice == enlace.length) indice = 0;
    document.write(enlace[indice]);
    indice++;
    }
</script>


<div class="col-xxs-offset-2 col-xxs-8 col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 search_page_indx text-center">
    <p>Encuentra lo que necesitas</p>
    <h6>Escribe el nombre del lugar donde estás, la empresa o el servio que buscas</h6>
    <?php include ('_buscador.php'); ?>           
</div>