<section>
    <script>
        var indice = 0;
            enlace = new Array();
            enlace[0] = "<img class='close_up_image hidden-xxs hidden-sm' src='_images/close_up_image_a.jpg'>";
            enlace[1] = "<img class='close_up_image hidden-xxs hidden-sm' src='_images/close_up_image_b.jpg'>";
            enlace[1] = "<img class='close_up_image hidden-xxs hidden-sm' src='_images/close_up_image_c.jpg'>";
                indice = Math.random() * (enlace.length);
            indice = Math.floor(indice);
            for (i=1;i<=1;i++) {
            if (indice == enlace.length) indice = 0;
            document.write(enlace[indice]);
            indice++;
            }
    </script>  
</section>