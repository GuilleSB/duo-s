<?php include './idsources.php'; ?>
<div class="ResForm"></div>
<div class="ResbeforeSend"></div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="text-footer">Contáctanos</h4>
                <style>
                    #miformulario>div>input, textarea{width:100%;border:none;margin:4px 0;border-radius:2px;color:#333}
                    .btn_box>button{width:100%;border:none;padding:5px;border-radius:3px;position:relative;top:-3px;}
                    .btn_box>button:hover{background:#c7674f;}
                    .wtspp{width:30px;}
                    .wtsppms{position:relative;top:3px;}
                </style>
                <form id="miformulario">
                        <div>
                            <input type="text" name="name" id="minombre" placeholder="Escribe su nombre" autocomplete="off" required/>
                        </div>
                        <div>
                            <input type="text" name="subject" id="direccion" placeholder="Escribe su dirección" autocomplete="off" required />
                        </div>
                        <div>
                            <textarea type="text" class="message-box" name="message" id="mimensaje" placeholder="Escribe su mensaje" autocomplete="off" required ></textarea>
                        </div>

              
                        <div class="btn_box">
                            <button class="boton" type="submit" id="misubmit">
                                <img class="wtspp" src="./assets/img/whatsapp.png" alt="whatsapp"><span class="wtsppms"> Enviar WhatsApp</span>
                            </button>
                        </div>
                    </form>
            </div>
            <div class="col-sm-4 text-center">
                <h4 class="text-footer">Porque elegirnos</h4>
                <p> 
                    Productos de calidad.</br>
                    Garantía.</br>
                    Experiencia.</br>
                    La mejor atención.</br>
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <h4 class="text-footer" >Dirección</h4>
                <p style="color: #FFF"><?php echo $address?></p>
                E-mail: <a href="#" target="_blank" style="color:<?php echo $fontcolor; ?>"> &nbsp; <?php echo $mail?></a>
            </div>
        </div>
    </div>
    <br><br><br>
    <h5 class="text-center tittles-pages-logo text-footer"><?php echo $store;?> &copy; 2022</h5>
    <div class="text-center">
        <a href='https://www.freepik.es/psd/maqueta'>Imágenes de freepik - www.freepik.es</a>
    </div>
</footer>

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
        const telefonos = "506<?php echo $whatsapp;?>";

        miformulario.addEventListener("submit", (event) => {
        event.preventDefault()
        buttonSubmits.innerHTML = "<i class='fas fa-circle-notch fa-spin'></i>"
        buttonSubmits.disabled = true
            setTimeout(() => {
                let minombre = document.querySelector("#minombre").value
                let direccion = document.querySelector("#direccion").value
                let mimensaje = document.querySelector("#mimensaje").value
                let mensaje = "send?phone=" + telefonos + "&text=*Mensaje desde https://duo-s.com/<?php echo $link;?>*%0A*Mi nombre es:*%0A " + minombre + ".%0A%0A *Vivo en:*%0A " + direccion + ".%0A%0A *Mensaje:**%0A " + mimensaje + ""
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
