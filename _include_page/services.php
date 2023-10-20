<style>
    .modal-header, .modal-body{color:#364968}
    .wa{width:30px;}
</style>
<div class="recommend_button"><br>
    <button data-toggle="modal" data-target="#services" class="btn-round center-block">Información                       
    </button>
</div>                  

 <!-- line modal -->
 <div class="modal fade" id="services" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        	    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        	    <h3 class="modal-title" id="lineModalLabel">Marketing, diseño web y diseño gráfico </h3>
            </div>

        	<div class="modal-body">    
                <h3>
                    <b>Escríbenos sin compromiso al WhatsApp</b>
                </h3>
                <p><br>
                    Para lo que necesite ¡No dudes en ponerte en contacto con nosotros!
                </p>
                <form id="miformulario" class="contactForm">
                    <fieldset>
                        <input type="text" name="name" class="form_input" id="minombre" placeholder="Escribe su nombre" autocomplete="off" required/><br><br>
                        <textarea name="message" class="form_textarea"  id="mimensaje" placeholder="Escribe su mensaje" autocomplete="off" required></textarea><br><br>
                        <button class="boton" type="submit" id="misubmit">
                    <img class="wa" src="./_images/whatsapp.png" alt="WhatsApp"> Enviar WhatsApp</button>
                    </fieldset>
                </form>
                
        	</div>
        </div>
    </div>
</div>
<!--start_script_whatsapp-->            
                        <script>
                            $(".box-inputs input").on("focus", function(){
                                $(this).addClass("focus");
                            });

                            $(".box-inputs input").on("blur", function(){
                                if($(this).val() == ""){
                                    $(this).removeClass("focus");
                                }
                            });

                            $(".box-textareas textarea").on("focus", function(){
                                $(this).addClass("focus");
                            });

                            $(".box-textareas textarea").on("blur", function(){
                                if($(this).val() == ""){
                                    $(this).removeClass("focus");
                                }
                            });
                        </script>

                        <script>
                            function isMobiles() {
                                if (sessionStorage.desktop)
                                    return false;
                                else if (localStorage.mobile)
                                    return true;
                                var mobile = ["iphone", "ipad", "android", "blackberry", "nokia", "opera mini", "windows mobile", "windows phone", "iemobile"];
                                    for (var i in mobile)
                                        if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0) return true;
                                            return false;
                                    }

                                const miformulario = document.querySelector("#miformulario");
                                const buttonSubmits = document.querySelector("#misubmit");
                                const urlDesktops = "https://web.whatsapp.com/";
                                const urlMobiles = "whatsapp://";
                                const telefonos = "50650114278"

                                miformulario.addEventListener("submit", (event) => {
                                event.preventDefault()
                                buttonSubmits.innerHTML = "<i class='fas fa-circle-notch fa-spin'></i>"
                                buttonSubmits.disabled = true
                                setTimeout(() => {
                                    let minombre = document.querySelector("#minombre").value
                                    let mimensaje = document.querySelector("#mimensaje").value
                                    let mensaje = "send?phone=" + telefonos + "&text=Mensaje desde https://duo-s.com/%0AHola, le saluda " + minombre + ".%0A%0A" + mimensaje + ""
                                        if(isMobiles()) {
                                            window.open(urlMobiles + mensaje, "_blank")
                                        }else{
                                            window.open(urlDesktops + mensaje, "_blank")
                                        }
                                        buttonSubmits.innerHTML = "<i class='fab fa-whatsapp'></i> Enviar WhatsApp"
                                            buttonSubmits.disabled = false
                                            }, 3000);
                            });
                        </script>
<!-- end contact form -->