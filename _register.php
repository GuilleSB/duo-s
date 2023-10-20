<script>
(function(window, document) { // asilamos el componente
  // creamos el contedor de las tostadas o la tostadora
  var container = document.createElement('div');
  container.className = 'toast-container';
  document.body.appendChild(container);
  
  // esta es la funcion que hace la tostada
  window.doToast = function(message) {
    // creamos tostada
    var toast = document.createElement('div');
    toast.className = 'toast-toast';
    toast.innerHTML = message;

    // agregamos a la tostadora
    container.appendChild(toast);    

    // programamos su eliminación
    setTimeout(function() {
      // cuando acabe de desaparecer, lo eliminamos del dom.
      toast.addEventListener("transitionend", function() {
         container.removeChild(toast);
      }, false);

      // agregamos un estilo que inicie la "transition". 
      toast.classList.add("fadeout");      
    }, 15000); // OP dijo, "solo dos segundos"
  }
})(window, document);


// ejemplo retardado de uso
setTimeout(function() {
   doToast("<span class='offer'>Bienvenidos a duo-s!!!</span> <a href='https://duo-s.com/_pub.php' class='free_reg'>Registrarse</a>");
}, 5000);
</script>
<style>
.toast-container {
  position:fixed;
  bottom:0px;
  width: 100%;
  z-index: 10;
}
.offer{
  font-weight:500}
.free_reg{
  background:#f6304f;
  padding:5px;
  margin-left:5px;
  border-radius:3px;
}

.toast-toast {
  font-size: 14px;
  background: #f43054; /* Old browsers */
  background: -moz-linear-gradient(left,  #f43054 0%, #9b25c6 50%, #350091 100%);
  background: -webkit-linear-gradient(left,  #f43054 0%,#9b25c6 50%,#350091 100%);
  background: linear-gradient(to right,  #f43054 0%,#9b25c6 50%,#350091 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f43054', endColorstr='#350091',GradientType=1 );
  color:#fff;
  padding:9px 15px;
  line-height: 1;  
  transition: all 10s; 
}

.fadeout{
  opacity: 0;
}
</style>