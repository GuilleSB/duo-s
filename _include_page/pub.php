<style>
    .modal-header, .modal-body{color:#364968}
</style>                  

 <!-- line modal -->
 <div class="modal fade" id="pub" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
        	    <div class="modal-content">
        		    <div class="modal-header">
        			    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        			    <h3 class="modal-title" id="lineModalLabel">Publica tu negocio </h3>
        		    </div>

        		    <div class="modal-body">
                        <div class="text-center">
                            Si deseas publicar tu empresa, negocio o pymes le damos una cordial bienvenida, el servicio es completamente gratuito y lo único que necesitas para publicarte es llenar este formulario.
                        </div><br>
                        <form id="miformulario" class="contactForm">
                            <fieldset>
                                <input type="text" class="form_input" id="nombreempresa" placeholder="Nombre de su empresa" autocomplete="off" required/>
                                <input type="text" class="form_input" id="actividadempresa" placeholder="Actividad de su empresa" autocomplete="off" required/>
                                <input type="text" class="form_input" id="horariosemana" placeholder="Horario lunes a viernes" autocomplete="off" required/>
                                <input type="text" class="form_input" id="horariosabado" placeholder="Horario sábados" autocomplete="off" required/>
                                <input type="text" class="form_input" id="horariodomingo" placeholder="Horario domingos" autocomplete="off" required/>
                                <input type="text" class="form_input" id="direccionempresa" placeholder="Dirección exacta de la empresa" autocomplete="off" required/>
                                <input type="text" class="form_input" id="telefonoempresa" placeholder="Teléfono empresa" autocomplete="off" required/>
                                <input type="text" class="form_input" id="whatsappempresa" placeholder="WhatsApp empresa" autocomplete="off" required/>
                                <input type="text" class="form_input" id="emailempresa" placeholder="Correo electrónico" autocomplete="off" required/>
                                <input type="text" class="form_input" id="facebookempresa" placeholder="Facebook empresa" autocomplete="off" required/><br>
                                <textarea name="message" class="form_textarea"  id="mimensaje" placeholder="Escribe un mensaje" autocomplete="off"></textarea><br><br>
                                <button class="boton" type="submit" id="misubmit">Enviar WhatsApp</button>
                            </fieldset>
                        </form><br><br>
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
                                    let direccion = document.querySelector("#direccion").value
                                    let mimensaje = document.querySelector("#mimensaje").value
                                    let mensaje = "send?phone=" + telefonos + "&text=Mensaje desde https://duo-s.com/%0AHola, le saluda " + minombre + ", soy de " + direccion + ".%0A%0A" + mimensaje + ""
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
<!--end_script_whatsapp--> 