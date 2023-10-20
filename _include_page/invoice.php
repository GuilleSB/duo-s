<style>
    .modal-header, .modal-body{color:#364968}
    .wa{width:30px;}
    .fe565{width:100px;}
</style>
<div class="recommend_button"><br>
    <button data-toggle="modal" data-target="#invoices" class="btn-round center-block">Información                       
    </button>
</div>                  

 <!-- line modal -->
 <div class="modal fade" id="invoices" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">Contabilidad y factura electrónica </h3>
            </div>

            <div class="modal-body"> 
                <img class="fe565" src="./_images/felectronica.jpg" alt="Facturación electrónica 565"><br>    
                <h3>
                    <b>Escríbenos sin compromiso al WhatsApp</b>
                </h3>
                <p><br>
                    Para lo que necesite ¡No dudes en ponerte en contacto con nosotros!
                </p>
                <form id="feformulario" class="contactForm">
                    <fieldset>
                        <input type="text" name="name" class="form_input" id="fenombre" placeholder="Escribe su nombre" autocomplete="off" required/><br><br>
                        <textarea name="message" class="form_textarea"  id="femensaje" placeholder="Escribe su mensaje" autocomplete="off" required></textarea><br><br>
                        <button class="boton" type="submit" id="fesubmit">Enviar WhatsApp</button>
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

                                const feformulario = document.querySelector("#feformulario");
                                const febuttonSubmits = document.querySelector("#fesubmit");
                                const feurlDesktops = "https://web.whatsapp.com/";
                                const feurlMobiles = "whatsapp://";
                                const fetelefonos = "50671289254"

                                feformulario.addEventListener("submit", (event) => {
                                event.preventDefault()
                                febuttonSubmits.innerHTML = "<i class='fas fa-circle-notch fa-spin'></i>"
                                febuttonSubmits.disabled = true
                                setTimeout(() => {
                                    let fenombre = document.querySelector("#fenombre").value
                                    let femensaje = document.querySelector("#femensaje").value
                                    let mensaje = "send?phone=" + fetelefonos + "&text=Mensaje desde https://duo-s.com/%0AHola, le saluda " + fenombre + ".%0A%0A" + femensaje + ""
                                        if(isMobiles()) {
                                            window.open(feurlMobiles + mensaje, "_blank")
                                        }else{
                                            window.open(feurlDesktops + mensaje, "_blank")
                                        }
                                        febuttonSubmits.innerHTML = "<i class='fab fa-whatsapp'></i> Enviar WhatsApp"
                                            febuttonSubmits.disabled = false
                                            }, 3000);
                            });
                        </script>
<!-- end contact form -->