<footer class="footer_page col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!--end container_one-->
    <div class="col-sm-12 col-md-12">                
        <?php
            include ('_include_page/recommend.php');
        ?>
    </div><br><br><br>

        <div class="text-center" id="donate-button-container">
            duo-s.com es un servicio gratuito pero usted puede agradecer al desarrollador con una colaboración!
            <div id="donate-button"></div>
            <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
            <script>
                PayPal.Donation.Button({
                env:'production',
                hosted_button_id:'RJRCQ7GCTCYQQ',
                image: {
                src:'https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif',
                alt:'Donate with PayPal button',
                title:'PayPal - The safer, easier way to pay online!',
                }
                }).render('#donate-button');
            </script>
        </div>






    <div>
        <div class="col-sm-4 col-md-4 text-center"><br>
            <span class="icon-telefono"></span>
            <div class="footer_contact">
                5011-4278
            </div>
        </div>
        <div class="col-sm-4 col-md-4 text-center"><br>
            <span class="icon-carta"></span>
            <div class="footer_contact">
                servicios@duo-s.com
            </div>
        </div>
        <div class="col-sm-4 col-md-4 text-center"><br>
            <span class="icon-ubicacion"></span>
            <div class="footer_contact">
                San José, Costa Rica
            </div>
        </div>
    </div>
    <div>
        <div class="col-sm-12 col-md-12 text-center"><br>
            2022 DUO-S, Diseñado y desarrollado por Servicios Web 
        </div>
    </div>
</footer>