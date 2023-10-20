var buscador = $("#movil-table").DataTable();

$("#movil-input-search").keyup(function(){
    
    buscador.search($(this).val()).draw();
    
    if ($("#movil-input-search").val() == ""){
        $(".movil-content-search").fadeOut(300);
    }else{
        $(".movil-content-search").fadeIn(300);
    }
})