<?php
    include ('_sources.php');
?>

<!--START-CHAT-->
<button onclick="mostrar_mini_contacto(10)"  class="icon-whatsapp"></button>

<div class="active_whatsapp"></div>
<div class="contacto_mini" id="contacto_mini10">
    <div class="contacto_mini1">
        <div class="opb">
            <a href="javascript:mostrar_mini_contacto(10)">
                X
            </a>
        </div>           
        
        <h3 class="text-center">Hola, duo-s le saluda,<br>será un gusto atenderle</h3>
        <form id="formulario" class="formulario">
            <div class="box-input">
                <input name="nombre" id="nombre" type="text" autocomplete="off" required>
                <span data-placeholder="Escriba su Nombre"></span>
            </div>
            <div class="box-textarea">
                <textarea name="message" id="message" autocomplete="off" required></textarea>
                <span class="spn" data-placeholder="Escriba su Mensaje"></span>
            </div>
            <button id="submit" type="submit" class="boton"><i class="fab fa-whatsapp"></i> Enviar WhatsApp</button><br>
        </form>
        <script>
            $(".box-input input").on("focus", function(){
                $(this).addClass("focus");
            });
            $(".box-input input").on("blur", function(){
                if($(this).val() == ""){
                    $(this).removeClass("focus");
                }
            });
     	$(".box-textarea textarea").on("focus", function(){
                $(this).addClass("focus");
            });
            $(".box-textarea textarea").on("blur", function(){
                if($(this).val() == ""){
                    $(this).removeClass("focus");
                }
            });
        </script>
        <script>
            function isMobile() {
                if (sessionStorage.desktop)
                    return false;
                else if (localStorage.mobile)
                    return true;
                var mobile = ['iphone', 'ipad', 'android', 'blackberry', 'nokia', 'opera mini', 'windows mobile', 'windows phone', 'iemobile'];
                for (var i in mobile)
                    if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0) return true;
                return false;
            }
            const formulario = document.querySelector('#formulario');
            const buttonSubmit = document.querySelector('#submit');
            const urlDesktop = 'https://web.whatsapp.com/';
            const urlMobile = 'whatsapp://';
            const telefono = '50650114278';
            formulario.addEventListener('submit', (event) => {
            event.preventDefault()
            buttonSubmit.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>'
            buttonSubmit.disabled = true
            setTimeout(() => {
                let nombre = document.querySelector('#nombre').value
                let message = document.querySelector('#message').value
                let mensaje = 'send?phone=' + telefono + '&text=*_Desde https://duo-s.com/_*%0A*Nombre*%0A' + nombre + '%0A*Mensaje*%0A' + message + ''
                if(isMobile()) {
                    window.open(urlMobile + mensaje, '_blank')
                }else{
                    window.open(urlDesktop + mensaje, '_blank')
                }
                buttonSubmit.innerHTML = '<i class="fab fa-whatsapp"></i> Enviar WhatsApp'
                buttonSubmit.disabled = false
            }, 3000);
            });
        </script>
    </div>
</div>

<script>
    var lbl_title="<head><title>chat</title><meta name='description' content='Comunícate con nosotros.'></head>";
String.prototype.trim = function() {return this.replace(/^\s+|\s+$/g,'');}

var MSIE7=false;
if (navigator.userAgent && navigator.userAgent.indexOf("MSIE 7")!=-1) MSIE7=true;

var main_url       = "https://duo-s.com";
var main_url_https = "https://duo-s.com";
var arr_no_autocomplete_off="frm_login";var imgs_lang="/artworks/es";
var lang="/artworks/es";
var DIR="";
var DIR_MONSTER_EDITOR="";
var STYLESID="default8_productos";
var imgs="/artworks";
var url_tobookmark="DEMO 8 - Software de ecommerce, tienda de productos, ventas on-line";
var id_idioma="1";
var lbl_cargando="<div class='cargando'><div class='acc1'></div><div class='loadercont'><div class='loader'></div><div class='estado'>Cargando...</div></div></div>";
var lbl_cargando_ico="<i class='fas fa-circle-notch fa-spin fa-fw fa-15x'></i>";
var lbl_buscando="Buscar...";
var lbl_sin_resultados="No se encontraron resultados.";
var LBL_JS_BUSCADOR='Buscar...';

var class_plus="fa fa-angle-down";
var class_minus="fa fa-angle-up";




function getUrlPrint(url)
{
	var aux=url.split("?");
	var dir=aux[0];if (aux.length==1) return "?dmp=1";

	if (aux.length>1) {
		aux=aux[1].split("&");
		n="";
		for (var i=0;i < aux.length;i++) {
			v=aux[i].split("=");
			if (v[0]!="opentype") {
				if (n!="") {n+="&";}
				if (v.length==1) {
					n+=v[0];
				} else {
					n+=v[0]+"="+v[1];
				}
			}
		}
		if (n!="") {dir+="?"+n;}
	}
	return dir;
}

function abrirVentana(url, width, height, name)
{
	if (name==null) {name='nueva_ventana';}
	var str = "height=" + height + ",innerHeight=" + height;
	str += ",width=" + width + ",innerWidth=" + width;
	if (window.screen) {
		var ah = screen.availHeight - 30;
		var aw = screen.availWidth - 10;
		var xc = (aw - width) / 2;
		var yc = (ah - height) / 2;
		str += ",left=" + xc + ",screenX=" + xc;
		str += ",top=" + yc + ",screenY=" + yc;
	}
	str += ",toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no";
	objwin=window.open(url, name, str);
	if (objwin)
		objwin.focus();
	return false;
}

function getObj(id) {if (document.getElementById) {return document.getElementById(id)} else if (document.all) {return document.all[id]} else {return document.all[id]}}

function setget_attr(obj, prop, val)
{
	if (!val)
		return obj.getAttribute(prop);
		else
		{
			if (prop=="onmouseover" || prop=="onmouseout" || prop=="onclick" || typeof val=="function")
				{
					if (obj.addEventListener)
					{
						if (navegador_detect=="ie")
							val = Function(val);
						}else{
							obj.attachEvent(prop, new Function('"+val+"'), false);
						}
				}
				obj.setAttribute(prop,val);
		}
}


function rnd(max)
{
	var x = Math.random() * max;
	x = x + 1;
	return parseInt(x);
}

var obj_focus=null;

function validar_form(form,obligatorios_otros,nroform)
{

	if (typeof obligatorios_otros != "undefined") {

		campos_chequeo=obligatorios_otros;

	} else {

		campos_chequeo=obligatorios;

	}

	if (typeof nroform == "undefined") {

		nroform='';

	}

	var campo,mensaje,valor;

	for (var i=0;i < campos_chequeo.length;i=i+2) {

		campo=campos_chequeo[i];
		mensaje=campos_chequeo[i+1];

		if (campo=="acepto_politicas") {

			o=getObj("acepto_politicas");
			if (o!=null && o.checked==false) {
				DHTMLALERT(mensaje);
				obj_focus=o;
				foco_anterior=o;
				return false;
			}

		} else if (campo=="id_zona_usuario") {

			o=getObj("id_zona_usuario");
			if (o.value=="0") {
				DHTMLALERT(mensaje);
				obj_focus=o;
				foco_anterior=o;
				return false;
			}

		} else {

			try {
				valor=eval("form."+campo+".value");
				eval_error=false;
			} catch(err) {
				valor="";
				eval_error=true;
			}

			if (eval_error) {

				try {
					valor=eval("form."+campo+"_dia.value");
					check_date=true;
				} catch(err) {
					check_date=false;
				}

				if (check_date) {

					dia=eval("form."+campo+"_dia.value");
					mes=eval("form."+campo+"_mes.value");
					try {anio=eval("form."+campo+"_anio.value");} catch(err) {anio=2000;}
					if (dia.substr(0,1)=="0") dia=dia.substr(1,dia.length-1);
					if (mes.substr(0,1)=="0") mes=mes.substr(1,mes.length-1);
					dia=parseInt(dia);
					mes=parseInt(mes)-1;
					anio=parseInt(anio);

					source_date = new Date(anio,mes,dia);

					if ((anio != source_date.getFullYear()) || (mes != source_date.getMonth()) || (dia != source_date.getDate())) {
						DHTMLALERT(mensaje);
						o=eval("form."+campo+"_dia");
						obj_focus=o;
						foco_anterior=o;
						return false;
					}

				} else {

					DHTMLALERT(mensaje);
					o=eval("form."+campo+"_mes");
					obj_focus=o;
					foco_anterior=o;
					return false;

				}

			} else {

				if (campo=="clave") {

					var clave_confirm=getObj("confirm_clave").value;
					var aux=mensaje.split("|");
					mensaje=aux[0];
					mensaje_extra=aux[1];

					if (valor.length < 6) {
						DHTMLALERT(mensaje);
						obj_focus=eval("form."+campo);
						foco_anterior=obj_focus;
						return false;
					}

					if (valor!=clave_confirm) {
						DHTMLALERT(mensaje_extra);
						obj_focus=eval("form."+campo);
						foco_anterior=obj_focus;
						return false;
					}

				} else if (campo=="email") {

					var aux=mensaje.split("|");
					mensaje=aux[0];
					mensaje_extra=aux[1];

					if (valor.indexOf('@') < 0 || valor.indexOf('.') < 0 || valor.indexOf(',') > 0) {
						DHTMLALERT(mensaje);
						obj_focus=form.email;
						foco_anterior=obj_focus;
						return false;
					}

				} else {

					if (valor=="") {
						DHTMLALERT(mensaje);
						obj_focus=eval("form."+campo);
						foco_anterior=obj_focus;
						return false;
					}

				}

			}

		}

	}

	var o=getObj("btn_submit"+nroform);
	if (o!=null) {o.disabled=true;}

	return true;
}

var buscador_tocado=false;

function validar_buscador(form)
{
	if (!buscador_tocado)
	{
		DHTMLALERT("Ingresa un texto a buscar.");
		return false;
	}
	var o=form.buscar.value;
	if (o.length < 2)
	{
		DHTMLALERT("Ingresa un texto a buscar.");
		return false;
	}
	return true;
}

function enfocar_buscador()
{
	getObj('frm_buscador').buscar.focus();
	aplicar_quitar_clase('buscador','buscar_on');
}

function limpiar_buscador(obj,comp,recuperar)
{
	if (typeof comp == "undefined") comp="Buscar";

	if (recuperar && obj.value=="" && obj.oldval!=undefined)
		obj.value=obj.oldval;
	else
		if (obj.value==comp)
		{
			obj.oldval=obj.value;
			obj.value="";
		}
	buscador_tocado=true;
}

function clear_input(o,l)
{
	if (o.value==l) {o.value='';}
}

function check_form_registro(form)
{
	var nform=0;

	for (i=1;i<=10;i++) {
		if (form["tiny_email"+i]!=null) {
			nform=i;
			break;
		}
	}

	if (nform==0) return false;

	var tiny_nombre=form["tiny_nombre"+nform];
	var tiny_email=form["tiny_email"+nform];
	if (tiny_nombre!=null)
	{
		if (tiny_nombre.value.trim()=="") {
			DHTMLALERT("Indica tu nombre.");
			tiny_nombre.focus();
			return false;
		}
	}

	var aux="Dirección de email incorrecta o no válida.|Los emails no coinciden.".split("|");
	if (tiny_email.value.indexOf('@') < 0 || tiny_email.value.indexOf('.') < 0 || tiny_email.value.indexOf(',') > 0) { DHTMLALERT(aux[0]); tiny_email.focus();return false;}

	return true;
}

function validar_olvidemiclave(form)
{
	var aux="Dirección de email incorrecta o no válida.|Los emails no coinciden.".split("|");
	if (form.olvideemail.value.indexOf('@') < 0 || form.olvideemail.value.indexOf('.') < 0 || form.email.value.indexOf(',') > 0) { DHTMLALERT(aux[0]); form.olvideemail.focus(); return false; }
	return true;
}


function mostrarcargando()
{
	var o = getObj("cargando_dinamico");
	if (o==null) return;
	o.className='cargando_dinamico cargando_dinamico_on';
}

function cerrarcargando()
{
	var o = getObj("cargando_dinamico");
	if (o==null) return;
	o.className='cargando_dinamico';
}

function crear_script_tag(file,tagname)
{
	var head_html = document.getElementsByTagName('head');
	if (head_html==null)
		head_html=document;
	else
		head_html=head_html[0];

	if (tagname==undefined) tagname="jscript_gen";

	scriptTag = getObj(tagname);
	if(scriptTag!=null)
	{
		head_html.removeChild(scriptTag);
		delete(scriptTag);
		scriptTag=null;
	}
	var script = document.createElement('script');
	var vch="?";
	if (file.indexOf("?")!=-1) vch="&";
	script.src = file+vch+Math.random()*1000000;
		script.type = "text/javascript";
		script.id = tagname;
		head_html.appendChild(script);

		//console.log("crear_script_tag:"+file);
}

function validar_login(formulario,msg)
{
	if (formulario.usuario.value == '' || formulario.clave.value == '')
	{
		DHTMLALERT(msg);
		formulario.usuario.focus();
		return false;
	}

	var o=getObj("btn_login_submit");
	if (o!=null) o.disabled="disabled";
	var o=getObj("login_loader");
	if (o!=null) o.style.display="";

	return true;
}

function lista_de_precios()
{
	abrirVentana("/productos/listadeprecios.php", 800, 600, "listap")
}

function validar_recomendar(form)
{
	if (form.miemail==null) {
		if (form.tuemail.value.indexOf('@') < 0 || form.tuemail.value.indexOf('.') < 0 || form.tuemail.value.indexOf(',') > 0) {alert('Indica el email del destinatario.');form.tuemail.focus();return false;}
	} else {
		if (form.tuemail.value.indexOf('@') < 0 || form.tuemail.value.indexOf('.') < 0 || form.tuemail.value.indexOf(',') > 0) {alert('Indica el email del destinatario.');form.tuemail.focus();return false;}
			}
	return true;
}

var last_video=0;
function video(id,t,yt)
{
	var url="/videos/get_video.php?id="+id+"&t="+t;
	if (typeof yt!="undefined") {
		url+="&yt="+escape(yt);
	}
	if (last_video>0) close_player(last_video);
	last_video=id;
	crear_script_tag(url);
}

function set_player(flv,id,ancho,alto)
{
	t=getPageSize();
	anchoventana=t[2];
	altoventana=t[3];

	if (anchoventana < ancho || altoventana < alto)
	{
		anchoventana=anchoventana;

		ratio=ancho/alto;

		if (anchoventana < ancho)
		{
			nuevancho=anchoventana;
			nuevoalto=parseInt((anchoventana/ratio));
		} else {
			nuevancho=parseInt((altoventana*ratio));
			nuevoalto=altoventana;
		}

		flv=str_replace(flv,"\""+ancho+"\"","\""+nuevancho+"\"");
		flv=str_replace(flv,"\""+alto+"\"","\""+nuevoalto+"\"");
		flv=str_replace(flv,"'"+ancho+"'","'"+nuevancho+"'");
		flv=str_replace(flv,"'"+alto+"'","'"+nuevoalto+"'");

		o=getObj("ly_player_container"+id);
		if (o!=null)
		{
			o.style.width=nuevancho+"px";
			o.style.height=nuevoalto+"px";
		}

		o=getObj("ly_player_container"+id);

		o=getObj("ly_player"+id);
		if (o!=null)
		{
			o.style.width=nuevancho;
			o.style.height=nuevoalto;
		}
	}

	var o=getObj("ly_player"+id);
	if (o==null) {return;}
	o.innerHTML=flv;
	showAndCenter("ly_player_container"+id);

	o=getObj("productos_presentacion6cont");
	if (o!=null) {
		var owl = $("#productos_presentacion6cont");
		owl.trigger('owl.stop');
	}

	activar_layer_transparente("ly_transparente",close_player_alt);

}

function close_player_alt(id) {
	if (last_video>0) close_player(last_video);
}

function close_player(id)
{
	var o=getObj("ly_player"+id);
	if (o!=null) o.innerHTML="";
	if (getObj("ly_player_container"+id)!=null)
		getObj("ly_player_container"+id).style.display="none";

	var ly_transparente =  getObj("ly_transparente");
	if (ly_transparente != null) {
		ly_transparente.style.display="none";
	}
}
function startvideos(){}

var ahora = 69547;
function updateClock()
{
ahora++;
if (ahora>(24*60*60)) ahora=0;
var horas=parseInt(ahora/(60*60));
var resto=ahora-(horas*(60*60));
var minutos=parseInt(resto/(60));
var segundos=resto-(minutos*60);
minutos = ( minutos < 10 ? "0" : "" ) + minutos;
segundos = ( segundos < 10 ? "0" : "" ) + segundos;
horas = ( horas < 10 ? "0" : "" ) + horas;
getObj("hora").innerHTML = horas + ":" + minutos + "<small>:" + segundos + " hs.</small>";
}


function $$asp( objId )
{
	var o = document.getElementById( objId );
	if ( o == null ) return;

	var n_obj = document.createElement("INPUT");
	n_obj.name = o.name + "_hidden_asp";
	n_obj.id = o.name + "_hidden_asp";
	n_obj.type = "hidden";
	o.form.appendChild( n_obj );

	o.onblur =  function ( e )
	{
		n_obj.value = o.value;
	};
	o.onkeyup =  function ( e )
	{
		n_obj.value = o.value;
	};
	o.onchange =  function ()
	{
		n_obj.value = o.value;
	};
	o.onmousedown =  function ()
	{
		n_obj.value = o.value;
	};
}

function cambiar_src(id,img)
{
	var o=getObj("prodzoom"+id);
	if ( o!=null && o.src.indexOf("")!=-1 )
	o.src=img;
}

function disable_autocomplete()
{
	if (typeof intAutocomplete != "undefined")
	{
		clearInterval(intAutocomplete);
		intAutocomplete = -1;
	}

	if (typeof arr_no_autocomplete_off != "undefined")
		{
		var vec_no_autocomplete_off = arr_no_autocomplete_off.split(",");
		for (var j=0;j < vec_no_autocomplete_off.length;j++) {
			vec_no_autocomplete_off[vec_no_autocomplete_off[j]]=vec_no_autocomplete_off[j];
		}
	} else {
		vec_no_autocomplete_off=new Array();
	}

	var forms = document.getElementsByTagName("form");
	for (var i=0;i < forms.length;i++)
	{
		if (forms[i].id!="frmorden" && (!vec_no_autocomplete_off[forms[i].id] || vec_no_autocomplete_off[forms[i].id]==undefined)) {
			forms[i].setAttribute("autocomplete","off");
			var elementos=forms[i].getElementsByTagName("INPUT");
			for (e=0;e < elementos.length; e++) {
				if (elementos[e]!=null && elementos[e].type=="text") {
					elementos[e].autocomplete = 'off';
				}
			}
		}
	}
}



var timer_refresh_timer=-1;

function keep_alive()
{
	clearInterval(timer_refresh_timer);
	timer_refresh_timer = -1;
	crear_script_tag("/includes/keep_alive.php");
}

function change_def_cur(c)
{
	var url="/includes/change_cur.php?cur="+c;
	crear_script_tag(url,"cur");
}

var foto_change_in=false;

function change_foto_prod_in(obj,version,foto1,filename1,foto2,filename2)
{
	if (foto_change_in) return;
	foto_change_in=true;
	var foto="/imgs/productos/productos"+version+"_"+foto2+"."+filename2;
	obj.src=foto;
	obj.srcset=foto;
}

function change_foto_prod_out(obj,version,foto1,filename1,foto2,filename2)
{
	var foto="/imgs/productos/productos"+version+"_"+foto1+"."+filename1;
	obj.src=foto;
	obj.srcset=foto;
	foto_change_in=false;
}

function posicionar_mapa_sucursal(lat, lon)
{
	location.href = str_replace(location.href,"#sucursales_mapa","")+"#sucursales_mapa";
	map_suc.setCenter(new google.maps.LatLng(lat,lon));
	map_suc.setZoom(15);
}

function openpopup(url)
{
	if (url=="") url=location.href;
	url=getUrlPopup(url);
	if (url.indexOf("?")==-1) url+="?popup=ok"; else url+="popup=ok";
	abrirVentana(url, 1024, 550, "_popup" + Math.ceil(1000*Math.random()));
	return false;
}

function getUrlPopup(url)
{
	var aux=url.split("?");
	var dir=aux[0];
		if (aux.length>1) {
			aux=aux[1].split("&");
			n="";
			for (var i=0;i < aux.length;i++) {
				v=aux[i].split("=");
				if (v[0]!="popup") {
				if (n!="") {n+="&";}
				if (v.length==1) {
					n+=v[0];
				} else {
					n+=v[0]+"="+v[1];
				}
			}
			}
	if (n=="") {dir+="?"+n;} else {dir+="?"+n+"&";}
	}
	return dir;
}

function calcular_ancho_alto_zoom(w, h, ancho_ventana, alto_ventana, ratio)
{
	if (ratio > 1)
	{
				if ( w > ancho_ventana )
			w = ancho_ventana;
		h = parseInt (w / ratio);
		if ( h > alto_ventana)
		{
			h = alto_ventana;
			w = parseInt (h * ratio);
		}
	} else {
		if ( h > alto_ventana )
			h = alto_ventana;
		w = parseInt (h * ratio);
				if ( w > ancho_ventana)
		{
			w = ancho_ventana;
			h = parseInt (w / ratio);
		}
	}

	return new Array(w,h);
}

function img_zoom(img, w, h)
{
	activar_layer_transparente("ly_transparente",close_img_plantilla_zoom);

	var obj = getObj("div_plantilla_zoom");

	if (!obj)
	{
		var otemp=document.createElement("div");
		otemp.id = "div_plantilla_zoom";
		otemp.style.position="absolute";

		var otemp_cerrar_contenedor=document.createElement("div");

		var otemp_cerrar=document.createElement("div");
		otemp_cerrar.id = "div_plantilla_zoom_but_cerrar";
		otemp_cerrar.className="cerrar";
		otemp_cerrar.style.position="absolute";
		otemp_cerrar.style.top="0px";
		otemp_cerrar.style.right="0px";

		var addfunction = close_img_plantilla_zoom;

		if (otemp.addEventListener) {
			otemp.addEventListener("click", addfunction, false);
			otemp_cerrar.addEventListener("click", addfunction, false);
		} else if (otemp.attachEvent) {
			otemp.attachEvent("onclick", addfunction);
			otemp_cerrar.attachEvent("onclick", addfunction);
		} else {
			otemp["onclick"] = addfunction;
			otemp_cerrar["onclick"] = addfunction;
		}

		var otemp_href=document.createElement("a");
		otemp_href.href="javascript:void(0);";
		document.body.appendChild(otemp);
		otemp_cerrar.appendChild(otemp_href);
		otemp_cerrar_contenedor.appendChild(otemp_cerrar);
		otemp.appendChild(otemp_cerrar_contenedor);

		var obj = getObj("div_plantilla_zoom");
	}
	obj.style.zIndex=99999999;
	obj.style.display="";

	var img_plantilla_zoom = getObj("img_plantilla_zoom");

	if (img_plantilla_zoom==null)
	{
		var oimg=document.createElement("img");
		oimg.id = "img_plantilla_zoom";
		oimg.src=img;
		obj.appendChild(oimg);
		img_plantilla_zoom = getObj("img_plantilla_zoom");
	} else {
		img_plantilla_zoom.src = img;
		img_plantilla_zoom.style.zIndex=999999999;
	}
	img_plantilla_zoom.style.display="";

	var ratio = w/h;
	var win=getPageSize();

	var pageWidth		= win[0];
	var pageHeight		= win[1];
	var windowWidth		= win[2];
	var windowHeight	= win[3];

	var array_wh = new Array();
	array_wh = calcular_ancho_alto_zoom(w, h, windowWidth, windowHeight, ratio);

	w = array_wh[0];
	h = array_wh[1];

	img_plantilla_zoom.width=w;
	img_plantilla_zoom.height=h;

	if (document.body && document.body.scrollTop)
	{
		var altobody=document.body.scrollTop;
	} else if (document.documentElement && !document.documentElement.scrollTop) {
		var altobody=document.documentElement.scrollTop;
	} else if (document.documentElement && document.documentElement.scrollTop) {
		var altobody=document.documentElement.scrollTop;
	}

	var X = ((windowWidth-w)/2);
	var Y = ((windowHeight-h)/2);

	var top=parseInt((altobody + (Y)));
	var left = parseInt((document.body.scrollLeft+(X)));

	if (top < 0) top=0;
	if (left < 0) left=0;

	obj.style.left=left+"px";
	obj.style.top = top + "px";
	obj.style.display="";
}

function close_img_plantilla_zoom()
{
	if (getObj("ly_transparente"))
		getObj("ly_transparente").style.display="none";

	if (getObj("ly_transparente"))
	{
		getObj("img_plantilla_zoom").src = "/artworks/blank.gif";
		getObj("img_plantilla_zoom").style.display="none";
	}
}

function nav_new_page(u)
{
	DHTMLALERT("Buscando...");
	var newForm = document.createElement("form");
	newForm.action = u;
	newForm.method = "get";
	newForm.target = "form"+Math.ceil(1000*Math.random());
	try {
		location.href=u;
	} catch (error) {
		location.href=u;
	}
}

function activar_free_shipping()
{
}

function ver_telefono_proyecto(contenedor,tel)
{
	aplicar_quitar_clase('telcont'+'_'+contenedor,'telcont_on');
	force_undisplay('tellog'+'_'+contenedor);
	crear_script_tag('/includes/reg_ga_tel_click.php?tel='+tel,'ga_click');
}

function sa(id)
{
	if (document.getElementById(id)!=null)
	{
		document.getElementById(id).focus();
		document.getElementById(id).select();
	}
}

function end_contacto()
{
	o=getObj("iframecontacto");
	if (o!=null) o.src="";
	location.href="/msgs/contacto_ok.php";
}

var mini_form_focus=null;
var timer_form_minifocus=-1;

function mostrar_mini_contacto(nro_contacto)
{
	if (nro_contacto=="") return;

	if (nro_contacto==1 || nro_contacto==10)
		nro_contacto_val="";
	else
		nro_contacto_val=nro_contacto;

	aplicar_quitar_clase('contacto_mini'+nro_contacto,'contacto'+nro_contacto_val+'_mini_activo');
	aplicar_quitar_clase('minicontacto'+nro_contacto_val+'_but'+nro_contacto,'minicontacto'+nro_contacto_val+'_but_on');
	o=getObj("contacto_mini_nombres"+nro_contacto);
	if (o!=null) {
		mini_form_focus=o;
		timer_form_minifocus = setInterval(set_focus_miniform, 1000);
	}
}

function set_focus_miniform()
{
	clearInterval(timer_form_minifocus);
	timer_form_minifocus = -1;
	mini_form_focus.focus();
}

function llamar_panel_opciones()
{
	display_undisplay('bienvenida_overlay');
	display_undisplay('panel_opciones',2);
}

function go_paso1_compra() {
	var url="/productos/includes/check_minimo_compra.php";
	crear_script_tag(url,"check_minimo_compra");
}

function cargar_url_externa(url,nombre,link)
{
	if (url==undefined || url=="")
		return;

	var div_cont_iframe = getObj("ly_iframe_container");
	if (div_cont_iframe==null)
		return;

	var iframe = getObj("iframe_contenido_externo");
	if (iframe.src!=undefined)
	{
		mostrarcargando();
		div_cont_iframe.style.display="";
		activar_layer_transparente("ly_transparente",CERRAR_IFRAME_PROD_URL_EXTERNA);
		iframe.src = url;
		cerrarcargando();
		return;
	}
	
	if (div_cont_iframe.style.display=="")
	{
		div_cont_iframe.style.display="none";
		if (getObj("ly_transparente").style.display!="none")
		{
			activar_layer_transparente("ly_transparente",CERRAR_IFRAME_PROD_URL_EXTERNA);
			alert('cerrarcargando');
			cerrarcargando();
		}
	} else {
				div_cont_iframe.style.display="";
		activar_layer_transparente("ly_transparente",CERRAR_IFRAME_PROD_URL_EXTERNA);
		alert('mostrarcargando');
		mostrarcargando();
	}

	var o=getObj("item_url_externa_nombre");
	var b=getObj("item_url_externa_link");
	if (typeof nombre != "string") nombre="";
	if (typeof link != "string") link="";
	if (o!=null) o.innerHTML=nombre;
	if (b!=null) b.href=link;

	if (iframe.src!=undefined)
		iframe.src = url;

	return;
}

function CERRAR_IFRAME_PROD_URL_EXTERNA()
{
	var div_cont_iframe = getObj("ly_iframe_container");
	if (div_cont_iframe==null)
		return;
	div_cont_iframe.style.display="none";
	activar_layer_transparente("ly_transparente",CERRAR_IFRAME_PROD_URL_EXTERNA);

	}

function isFullScreen()
{
	return (document.fullScreenElement && document.fullScreenElement !== null)
		|| document.mozFullScreen
		|| document.webkitIsFullScreen;
}

function requestFullScreen(element)
{
	if (element.requestFullscreen)
		element.requestFullscreen();
	else if (element.msRequestFullscreen)
		element.msRequestFullscreen();
	else if (element.mozRequestFullScreen)
		element.mozRequestFullScreen();
	else if (element.webkitRequestFullscreen)
		element.webkitRequestFullscreen();
}

function exitFullScreen()
{
	if (document.exitFullscreen)
		document.exitFullscreen();
	else if (document.msExitFullscreen)
		document.msExitFullscreen();
	else if (document.mozCancelFullScreen)
		document.mozCancelFullScreen();
	else if (document.webkitExitFullscreen)
		document.webkitExitFullscreen();
}

function toggleFullScreen(element)
{
	if (isFullScreen())
		exitFullScreen();
	else
		requestFullScreen(element || document.documentElement);
}function writeflash(o,m,w,h,wm,p,oid) {
//alert(wm);
var p=unescape(p);
var obj = document.getElementById(o);
if (obj==null){
alert(o+' MISSING');
return;
}

if (oid!=null && oid!=undefined) {tag_name="NAME='"+oid+"'";} else {tag_name="";}
if (oid!=null && oid!=undefined) {oid="id='"+oid+"'";} else {oid="";}

f="<object "+oid+" classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0' width='"+w+"' height='"+h+"'>";
f+="<param name='movie' value='"+m+"'>";
f+="<param name='menu' value='false'>";
if (p!="") {f+="<param name='flashvars' value='"+p+"'>";}
f+="<param name='quality' value='high'>";
f+="<param name='wmode' value='"+wm+"'>";
if (p!="") {f+=" flashvars='"+p+"'";}
f+="></embed>";
f+="</object>";
obj.innerHTML=f;
}var imgs=DIR+"/artworks";

function force_display(ly)
{
    veclayers=ly.split(",");
    for (var i=0;i<veclayers.length;i++)
    {
        ly=document.getElementById(veclayers[i]);
        if (ly!=null) {ly.style.display="";}
    }
}

function force_undisplay(ly)
{
    veclayers=ly.split(",");
    for (var i=0;i<veclayers.length;i++)
    {
        ly=document.getElementById(veclayers[i]);
        if (ly!=null) {ly.style.display="none";}
    }
}

function display_undisplay(id_obj_varios, slow)
{
    if (slow==undefined) slow=0;
    objetos=id_obj_varios.split(",");
    for (var i=0;i<objetos.length;i++)
    {
        obj=getObj(objetos[i]);
        if(obj==null) {DHTMLALERT(""+objetos[i]+"\n\nNO ENCONTRADO."); return;}
        if (obj.style.display=="" || obj.style.display=="block") {
            if (slow>0)
                if (slow==1)
                    $("#"+objetos[i]).hide('slow');
                else
                    $("#"+objetos[i]).slideUp();
            else
                obj.style.display="none";
        } else {
            if (slow>0)
                if (slow==1)
                    $("#"+objetos[i]).show('slow');
                else
                    $("#"+objetos[i]).slideDown();
            else
                obj.style.display="";
        }
    }
}

function aplicar_quitar_clase(obj,clase,forzar_quitar)
{
    var objeto;
    if  ( typeof(obj) != "object" ) objeto=getObj(obj);
    else                            objeto = obj;

    if (objeto!=null && objeto.className!=undefined)
    {
        if  ( objeto.className.indexOf(clase) != -1 || forzar_quitar != undefined )
            objeto.className = objeto.className.split(clase).join("");
        else
        {
            if  ( objeto.className != "" )
                objeto.className += " ";
            objeto.className += clase;
        }
    }
}

function agregar_clase_objeto(obj,clase)
{
    var objeto;
    if  ( typeof(obj) != "object" ) objeto=getObj(obj);
    else                            objeto = obj;

    if  ( objeto != null && objeto.className != undefined )
    {
        if ( objeto.className.indexOf(clase) == -1 )
            objeto.className += " " + clase;
    }
}

function quitar_clase_objeto(obj,clase)
{
    var objeto;
    if  ( typeof(obj) != "object" ) objeto=getObj(obj);
    else                            objeto = obj;

    if  ( objeto != null && objeto.className != undefined )
    {
        str = objeto.className;
        str = str_replace(str, clase,"");
        str = str_replace(str, "  ", "");
        objeto.className = str;
    }
}

function aplicar_clase_tipo_vista(modo, f_forzar )
{
    var elemento1=getObj("vista_producto1");
    var elemento2=getObj("vista_producto2");

    if (elemento1==null || elemento2==null) return;

    switch(modo) {
        case 1:
            elemento1.className="orden_asc";
            elemento2.className="orden_off";
            quitar_clase_objeto('resultado_productos','prod_var1');
            break;
        case 2:
            elemento1.className="orden_off";
            elemento2.className="orden_asc";
            aplicar_clase_objeto('resultado_productos','prod_var1',1);
            break;
    }
    set_vista_productos(modo, f_forzar);
}

function aplicar_clase_objeto(obj,clase)
{
    if (typeof(obj) != "object")
        objeto=getObj(obj);
    else
        objeto = obj;

    if (objeto!=null && objeto.className!=undefined)
    {
        if ( objeto.className != "" ) {
            objeto.className += " ";
        }
        objeto.className += clase;
    }
}

function aplicar_clase_objeto(obj,clase,sin_repetir)
{
    if (typeof(obj) != "object")
        objeto=getObj(obj);
    else
        objeto = obj;

    if (objeto!=null && objeto.className!=undefined) {

        if (sin_repetir)
        {
            objeto.className = objeto.className.split(clase).join("");
            objeto.className = objeto.className.split("  ").join("");

            if ( objeto.className.indexOf(clase)!=-1)
                return;
        }

        if ( objeto.className != "" ) {
            objeto.className += " ";
        }
        objeto.className += clase;
    }
}

function str_replace(str,s,t)
{
return str.split(s).join(t);
}

function resize_obj(id_obj, h_px, w_px)
{
    obj=getObj(id_obj);
    if (h_px!=undefined && h_px!="")
    {
        if (isNaN(h_px))
            h_px=parseInt(str_replace(h_px.toString(),"px",""));
        obj.style.height=h_px+"px";
    }
    if (w_px!=undefined && w_px!="")
    {
        if (isNaN(w_px))
            w_px=parseInt(str_replace(w_px.toString(),"px",""));
        obj.style.width=w_px+"px";
    }
}

function showAndCenter(id, img)
{
    var obj = id;
    if (typeof obj != "object")
        obj=getObj(id);

    if (obj==null) return;

    obj.style.display="";
    obj.style.visibility="visible";

    ancho_layer=obj.style.width;
    ancho_layer=ancho_layer.replace("px","");
    alto_layer=obj.style.height;
    alto_layer=alto_layer.replace("px","");

    if (document.body && document.body.scrollTop)
    {
        var altobody=document.body.scrollTop;
    } else if (document.documentElement && !document.documentElement.scrollTop) {
        var altobody=document.documentElement.scrollTop;
    } else if (document.documentElement && document.documentElement.scrollTop) {
        var altobody=document.documentElement.scrollTop;
    }

    var X = ((document.body.scrollWidth-ancho_layer)/2);
    var Y = ((screen.availHeight-alto_layer)/2);

    obj.style.zIndex=99999999;
    obj.style.left=parseInt((document.body.scrollLeft+(X)))+"px";
    obj.style.top =parseInt((altobody +(Y) - 100))+"px";
}

var focused                  = null; // salvado al abrir el DHTMLALERT
var salvo_document_onkeydown = null; // salvado al abrir el DHTMLALERT
var foco_anterior            = null; // cargado A MANO antes de abrir el DHTMLALERT
var dhtml_alert_params       = {};   // parametros pasados al ultimo DHTMLALERT abierto

function DHTMLALERT( msg, focus_obj, params )
{
    if  ( msg    == undefined ) msg    = "";
    if  ( params == undefined ) params = {};

    var dalert_msg = getObj("dhtml_alert_MSG");

    // ---------------------------------------------------------------
    // cerrar dialogo: si se paso mensaje vacio o no se incluyo el objeto en el arbol
    if  (   msg == ""  ||
          ! dalert_msg )
    {
        // si hay que
        // cerrar el dialogo usar los parametros actuales
        cerrado_dhtmlalert( dalert_msg );
        return;
    }

    // ---------------------------------------------------------------
    // hay que abrir un nuevo dialogo

    // cancelo timer del dialogo anterior, si lo habia
    if  ( dhtml_alert_params.ocultar_timer_id )
    {
        clearInterval( params.ocultar_timer_id );
        params.ocultar_timer_id = undefined;
    }

    // de aca en adelante construyo nuevo dialogo
    dhtml_alert_params   = params;

    // muestro mensaje
    dalert_msg.innerHTML = msg;

    // oculto titulo si corrsponde
    if  ( params.ocultar_titulo )
        agregar_clase_objeto(   'dhtml_alert',     'dhtml_alert_3'   );

    // muestro dialogo
    agregar_clase_objeto( 'dhtml_alert', 'dhtml_alert_on'  );
    activar_layer_transparente( 'ly_transparente', cerrar_dhtmlalert );

    // hay que enfocar algo que paso el usuario ?
    var o = focus_obj == undefined
                ? getObj( "btn_cerrar_dhmlalert" )  // no -> enfocar el boton de cerrar
                : getObj( focus_obj              ); // si -> enfocar lo que paso
    if  ( o != null )
        o.focus();

    // pongo funcion que espera escape
    salvo_document_onkeydown = document.onkeydown;
    document.onkeydown = cerrar_dhtmlalert_esc;

    // programo timer para que se oculte dialogo automaticamente si corresponde
    if  ( params.ocultar_en_ms )
        params.ocultar_timer_id = setInterval( cerrar_dhtmlalert, params.ocultar_en_ms );
}

function cerrar_dhtmlalert_esc(e)
{
    e = e || window.event;
    if  ( e.keyCode == 27 )
    {
        e.preventDefault();
        // llamo directo, hay que
        // cerrar el dialogo usar los parametros actuales
        cerrado_dhtmlalert();
    }
}

function cerrar_dhtmlalert()
{
    // en lugar de llamar a la funcion de abrir sin parametros
    //DHTMLALERT();

    // llamo directo, hay que
    // cerrar el dialogo usar los parametros actuales
    cerrado_dhtmlalert();
}

function cerrado_dhtmlalert( dalert_msg )
{
    // remuevo funcion que espera escape
    document.onkeydown       = salvo_document_onkeydown;
    salvo_document_onkeydown = null;

    // cancelo timer
    if  ( dhtml_alert_params.ocultar_timer_id )
    {
        clearInterval( dhtml_alert_params.ocultar_timer_id );
        dhtml_alert_params.ocultar_timer_id = undefined;
    }

    // oculto dialogo
    if  ( ! dalert_msg )
        dalert_msg = getObj("dhtml_alert_MSG");

    if  ( dalert_msg )
    {
        dalert_msg.innerHTML = "";

        if  ( getObj("ly_transparente").style.display != "none" )
        {
            aplicar_quitar_clase(       'dhtml_alert',     'dhtml_alert_on'  );
            activar_layer_transparente( 'ly_transparente', cerrar_dhtmlalert );
        }
    }

    // enfoco lo que estaba antes
    if  ( foco_anterior != null )
    {
        foco_anterior.focus();
        foco_anterior = null;
    }

    // notifico que se cerro el dialogo
    if  ( dhtml_alert_params.fnc_cerrar )
        dhtml_alert_params.fnc_cerrar.call();

    // limpio parametros para la proxima
    dhtml_alert_params = {};
}

function activar_layer_transparente(id_obj,addfunction)
{
    var obj=getObj(id_obj);
    if (obj==null) return;

    if (obj.className!="u")
    {
        obj.className="u";
        if (typeof addfunction == "function")
        {
            if (obj.removeEventListener)
            {
                obj.removeEventListener("click", addfunction, false);
            } if (obj.detachEvent) {
                obj.detachEvent("onclick", addfunction);
            } else {
                obj["click"] = null;
            }
        }
    } else {
        if (typeof addfunction == "function")
        {
            if (obj.addEventListener) {
                obj.addEventListener("click", addfunction, false);
            } else if (obj.attachEvent) {
                obj.attachEvent("onclick", addfunction);
            } else {
                obj["onclick"] = addfunction;
            }
        }
        obj.className="block";
    }
}

function getPageSize()
{
    var xScroll, yScroll;

    if (window.innerHeight && window.scrollMaxY) {
        xScroll = document.body.scrollWidth;
        yScroll = window.innerHeight + window.scrollMaxY;
    } else if (document.body.scrollHeight > document.body.offsetHeight){
        xScroll = document.body.scrollWidth;
        yScroll = document.body.scrollHeight;
    } else {
        xScroll = document.body.offsetWidth;
        yScroll = document.body.offsetHeight;
    }

    var windowWidth, windowHeight;
    if (self.innerHeight) {
        windowWidth = self.innerWidth;
        windowHeight = self.innerHeight;
    } else if (document.documentElement && document.documentElement.clientHeight) {
        windowWidth = document.documentElement.clientWidth;
        windowHeight = document.documentElement.clientHeight;
    } else if (document.body) {
        windowWidth = document.body.clientWidth;
        windowHeight = document.body.clientHeight;
    }

    if(yScroll < windowHeight){
        pageHeight = windowHeight;
    } else {
        pageHeight = yScroll;
    }

    if(xScroll < windowWidth){
        pageWidth = windowWidth;
    } else {
        pageWidth = xScroll;
    }
    arrayPageSize = new Array(pageWidth,pageHeight,windowWidth,windowHeight)
    return arrayPageSize;
}

function recomendar_web(){
    var ly_transparente=getObj("ly_transparente");
    var obj=getObj("recomendar");

    if (obj.className.indexOf("dhtml_alert_on")!=-1) {
        activar_layer_transparente("ly_transparente",recomendar_web);
        aplicar_quitar_clase('recomendar','dhtml_alert_on');
    } else {
        activar_layer_transparente("ly_transparente",recomendar_web);
        aplicar_quitar_clase('recomendar','dhtml_alert_on');

        o=getObj("form_recomendar").tuemail;
        if (o!=null) {
            o.focus();
        } else {
            o=getObj("form_recomendar").tuemail;
            if (o!=null) o.focus();
        }
    }
}

var clases_visibles = [];
function desocultar_ids(id_clase,visible_defecto)
{
    if(clases_visibles[id_clase]==undefined)clases_visibles[id_clase]=visible_defecto;
    clases_visibles[id_clase]=!clases_visibles[id_clase];
    if(clases_visibles[id_clase])
        $("."+id_clase).show();
    else
        $("."+id_clase).hide();
}

var ALTO_CABECERA = 175;

$(document).ready(function () {
    $(document).on("scroll", onScroll);
    $('#ly_menu_b span').removeClass('menuactivo');
    onScroll( null );

    $('#ly_menu_b a[href^="#"]').on('click',   function (e)
    {
        e.preventDefault();
        $(document).off("scroll");

        var ps  = window.location.href.split("#");
        var url = ps[0];
        if  ( url.endsWith("/") ) url = url.substr( 0, url.length - 1 );
        if  ( e.currentTarget.hash != null &&
              e.currentTarget.hash != ""   &&
              e.currentTarget.hash != "#"  &&
              url != main_url              &&
              url != main_url_https        )
        {
            url = (url.startsWith("https:") ? main_url_https : main_url ) + e.currentTarget.hash;
            window.location.href = url;
            return;
        }

        $('a').each(function () {
            $(this).removeClass('menuactivo');
        })
        $(this).addClass('menuactivo');

        var target = this.hash;
        window.location.hash = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top-ALTO_CABECERA
        }, 500, 'swing', function () {
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event)
{
    var scrollPos = $(document).scrollTop();
    var activar = null;
    $('#ly_menu_b a').each( function ()
        {
            var currLink = $(this);
            var href = currLink.attr("href");
            if  ( href == undefined || href == "" || href.substr(0,1) != "#" ) return;

            var refElement = $(href);
            var ref_pos  = refElement.position();
            if  ( ! ref_pos )
            {
                return;
            }
            if ( refElement.position().top-ALTO_CABECERA <=
                    scrollPos && scrollPos <=
                        refElement.position().top +  refElement.height() )
                activar = currLink;
        }
        );
    if ( activar )
    {
        $('#ly_menu_b a').each(function ()
            {
                var currLink = $(this);
                currLink.removeClass("menuactivo");
            }
        );
        activar.addClass("menuactivo");
    }
}function set_tab_new(obj)
{
	var obj_id = obj.id;
	var prefijo="container_";
	var obj_class = obj.className;
	var vec_tab_names = obj_id.split("_");
	if (vec_tab_names.length<=1)
	{
		alert("Nombre TAG inválido falta prefijo _#");
		return;
	}
	vec_tab_names.pop();
	var tab_name  = vec_tab_names.join("_");

	obj_class = obj_class.split("_off").join("");
	obj_class = obj_class.split("_on").join("");

	for (var i=1;i<20;i++)
	{
		tab_actual=getObj(tab_name+"_"+i);
		container_actual=getObj(prefijo+tab_name+"_"+i);
		if (tab_actual!=null && container_actual!=null)
		{
			tab_actual.className="off";
			container_actual.style.display="none";
		}
	}

	tab_actual=getObj(obj_id);
	container_actual=getObj(prefijo+obj_id);

	tab_actual.className="active";
	container_actual.style.display="";
}var autoexpandiendo=false;
var tipo_categorias="";
var contenidos_categorias_mostrar_items="";

	var forzar_navegar_siempre=false;

function init_cats() {

	var pdiv,phref;

	for (var i=0;i < paths.length;i++) {
		
		aux=paths[i].split(".");
		pdiv=getObj("a"+paths[i]);
		return_false=false;
		if (pdiv==null)	{
			return_false=true;
			pdiv=getObj("p"+paths[i]);
		}
		phref=getObj("l"+paths[i]);
		phrefimg=getObj("limg"+paths[i]);

		if ("0"=="1" && aux.length<=2) {
		
		} else {

			if (pdiv!=null) {
				if (pdiv.addEventListener) {
					if (return_false) {
						if (phref!=null) phref.setAttribute("onclick","return false");
					}
					if (pdiv!=null) pdiv.setAttribute("onclick","expand_contract_cats('"+paths[i]+"')");
					if (phrefimg!=null) phrefimg.setAttribute("onclick","expand_contract_cats('"+paths[i]+"')");
				} else {
					if (return_false) {
						if (phref!=null) phref.attachEvent("onclick", function(){return false}, false);
					}
					if (pdiv!=null) pdiv.attachEvent("onclick", new Function("expand_contract_cats('"+paths[i]+"')"), false);
					if (phrefimg!=null) phrefimg.attachEvent("onclick", new Function("expand_contract_cats('"+paths[i]+"')"), false);
				}
			}
			
		}

	}

}

var last_url_expand="";
var last_padre_expandido="";

function expand_contract_cats(path) {

	var plus=getObj("plus"+path);

	if (plus!=null) {
		//vascula la clase
		if (plus.className==class_plus) {
			plus.className=class_minus;
		} else {
			plus.className=class_plus;
		}
	}

	var aux=path.split(".");

	o=getObj("l"+path);

	if (o!=null) last_url_expand=o.href; else last_url_expand="";

	var clase_padre="level1";

	if (expandidos[path] == undefined || expandidos[path]==0) {
		expandir_hijos(path);
		clase_padre="level1 treeactive";
	} else {
		if (forzar_navegar_siempre || (aux.length==2 && !autoexpandiendo)) {
			if (cat_url.charAt(cat_url.length-1)=="&" || cat_url.charAt(cat_url.length-1)=="?") {
				var nav_url=cat_url+"path="+path;
			} else if (cat_url=="") {
				var nav_url=o.href;
			} else {
				var nav_url=cat_url+"&path="+path;
			}
			if (!forzar_navegar_siempre) {
				contraer_hijos(path);
			} else {
				location.href=nav_url;
				return;
			}
		} else {
			contraer_hijos(path);
			clase_padre="level1";
		}
	}

	var aux=path.split(".");

	if (aux.length==2) {

		if (last_padre_expandido!="") {
			var li_padre=getObj("p"+last_padre_expandido);
			if (li_padre!=null) li_padre.className="level1";
		}

		var li_padre=getObj("p"+path);
		if (li_padre!=null) li_padre.className=clase_padre;

		last_padre_expandido=path;
	}

}

function expandir_hijos(path) {

	var ids_actual,prof_actual,path_actual,objhijo;
	var ids=path.split(".");
	var prof=ids.length-1;
	var hubo_expansion=false;

		for (var i=0;i < paths.length;i++) {

		path_actual=paths[i];
		ids_actual=path_actual.split(".");
		prof_actual=ids_actual.length-1;
				if ((prof+1)==prof_actual) {
						if ((path_actual.substring(0,(path.length+1))) == (path+".")) {
				objhijo=getObj("p"+path_actual);
				if (objhijo!=null) {
					objhijo.style.display="";
					hubo_expansion=true;
				}
			}

		}

	}

	if (tipo_categorias=="contenidos" && contenidos_categorias_mostrar_items=="") hubo_expansion=false;

	if (!hubo_expansion) {

		if (cat_url.charAt(cat_url.length-1)=="&" || cat_url.charAt(cat_url.length-1)=="?") {
			var nav_url=cat_url+"path="+path;
		} else {
			var nav_url=cat_url+"&path="+path;
		}
	
		if (!autoexpandiendo) {
			if (cat_url!="") {
						var h=getObj("l"+path);
						if (h==null || h.href=="") location.href=nav_url; else location.href=h.href;
			} else {
				if (last_url_expand!="") location.href=last_url_expand;
			}
		}

	} else {
		expandidos[path]=1;
	}

}

function contraer_hijos(path) {

	var path_actual,objhijo;
	var ids=path.split(".");
	var prof=ids.length-1;

		for (var i=0;i < paths.length;i++) {
		path_actual=paths[i];
				if ((path_actual.substring(0,(path.length+1))) == (path+".")) {
			objhijo=getObj("p"+path_actual);
			plus=getObj("plus"+path_actual);
			if (plus!=null) plus.className=class_plus;
			expandidos[path_actual]=0;
			if (objhijo!=null) objhijo.style.display="none";
		}

	}

	expandidos[path]=0;

}

function autoexpand(path) {


	if (path=="") return;

	autoexpandiendo=true;

	var ids=path.split(".");
	var path_nav="0";

		for (var i=1;i<(ids.length);i++) {
		path_nav+="."+ids[i];
		expandir_hijos(path_nav);
		plus=getObj("plus"+path_nav);
		if (plus!=null) plus.className=class_minus;
	}
	
	autoexpandiendo=false;

}/*
 * easy-autocomplete
 * jQuery plugin for autocompletion
 * 
 * @author Åukasz PaweÅ‚czak (http://github.com/pawelczak)
 * @version 1.3.5
 * Copyright  License: 
 */


</script>