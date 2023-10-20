<?php
$valoresSegundoSelect=array(
    "0"=>"Subcategoría" 
);

$correcto=1;

if($_POST["id"]=="_alquileres")
{
    // Alquileres
    array_push($valoresSegundoSelect,"Alquileres y bienes raíces");
}elseif($_POST["id"]=="_artes"){
    // Artes
    array_push($valoresSegundoSelect,"Artes");
}elseif($_POST["id"]=="_audiovisuales"){
    // Audiovisuales
    array_push($valoresSegundoSelect,"Audiovisuales");
}elseif($_POST["id"]=="_autos_motos"){
    // Autos y motos
    array_push($valoresSegundoSelect,"Decoración", "Grúa / plataforma", "Eléctrico", "Lavacar - limpieza", "Llantera", "Lubricación", "Mecánico", "Radiadores", "Repuestos", "Soldadura");
}elseif($_POST["id"]=="_ciclos"){
    // Ciclos
    array_push($valoresSegundoSelect,"Ciclos");
}elseif($_POST["id"]=="_comidas_bebidas"){
    // Coidas y bebidas
    array_push($valoresSegundoSelect,"Bar", "Cafetería", "Heladería", "Marisquería", "Restaurante");
}elseif($_POST["id"]=="_compras_hogar"){
    // Compras del hogar
    array_push($valoresSegundoSelect,"Almacén", "Carnicería", "Distribuidora", "Ferretería", "Licorera", "Muebles", "Panadería", "Pescadería", "Supermercado", "Tienda", "Verdulería");
}elseif($_POST["id"]=="_construccion"){
    // Construcción
    array_push($valoresSegundoSelect,"Alquiler de equipo", "Arquitectura", "Asfaltos", "Constructoras", "Decoración", "Electricistas", "Enchapes y pisos", "Ferretería", "Fontanería", "Maestro de obras", "Mantenimiento", "Materiales de construcción", "Movimientos de Tierra", "Pintores", "Portones", "Remodelaciones", "Soldadura", "Techos / Canoas"); 
}elseif($_POST["id"]=="_cuidado_personal"){
    // Cuidado personal
    array_push($valoresSegundoSelect,"Barbería", "Gimnacio", "Productos de cuidado personal", "Sala de belleza", "Spa");
}elseif($_POST["id"]=="_deportes"){
    // Deportes
    array_push($valoresSegundoSelect,"Alquiler de canchas", "Equipos deportivos","Implementos deportivos", "Tiendas deportivas");
}elseif($_POST["id"]=="_educacion"){
    // Educación
    array_push($valoresSegundoSelect,"Capacitación", "Clases", "Instituto");
}elseif($_POST["id"]=="_electronica_tecnologia"){
    // Electrónica y tecnología
    array_push($valoresSegundoSelect,"Reparación venta celulares", "Reparación venta computadoras", "Reparación venta electrodomésticos", "Televisión", "Tienda");
}elseif($_POST["id"]=="_eventos"){
    // Eventos
    array_push($valoresSegundoSelect,"Discomóvil", "Fiestas", "Grupo musical", "Karaoke", "Salón de eventos", "Televisión");
}elseif($_POST["id"]=="_fabricas"){
    // Fabricas
    array_push($valoresSegundoSelect,"Alimentos", "Textiles");
}elseif($_POST["id"]=="_impresos"){
    // Impresión y publicidad
    array_push($valoresSegundoSelect,"Bordado", "Diseño gráfico y web", "Imprenta", "Sellos", "Serigrafía", "Sublimación");
}elseif($_POST["id"]=="_joyas_accesorios"){
    // Joyas y accesorios 
    array_push($valoresSegundoSelect,"Joyería");
}elseif($_POST["id"]=="_libreria_bazar"){
    // Librería y bazar 
    array_push($valoresSegundoSelect,"bazar", "libreria");
}elseif($_POST["id"]=="_mascotas"){
    // Mascotas
    array_push($valoresSegundoSelect,"Estética", "Tienda", "Veterinaria");
}elseif($_POST["id"]=="_recreacion_turismo"){
    // Recreación y turismo
    array_push($valoresSegundoSelect,"Balnearios", "Cabinas", "Hoteles", "Parques", "Salón de eventos");
}elseif($_POST["id"]=="_salud_bienestar"){
    // Salud y bienestar
    array_push($valoresSegundoSelect,"Clínica", "Farmacia", "Limpieza y desinfección", "Macrobiótica", "Masajes", "Nutricionista");
}elseif($_POST["id"]=="_seguridad"){
    // Seguridad
    array_push($valoresSegundoSelect,"Seguridad");
}elseif($_POST["id"]=="_servicios_agricolas"){
    // Servicios agrícolas
    array_push($valoresSegundoSelect,"Agroquímicos", "Apicultura", "Maquinaria agrícola", "Taller de maquinaria", "Veterinaria");
}elseif($_POST["id"]=="_profesionales"){
    // Profesionales
    array_push($valoresSegundoSelect,"Abogados", "Contabilidad", "Doméstico", "Factura electrónica", "Transportes");
}elseif($_POST["id"]=="_vestido_calzado"){
    // Vestido y calzado
    array_push($valoresSegundoSelect,"Pasamanería", "Telas", "Tienda", "Zapatería");
}else{
    $correcto=0;
}

# devolvemos el resultado en json
echo json_encode(array("correcto"=>$correcto, "contenido"=>$valoresSegundoSelect));
?>