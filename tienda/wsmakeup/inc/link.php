<?php 
    session_start(); 
    error_reporting(E_PARSE);
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/font-awesome.min.css">
<link rel="stylesheet" href="./css/normalize.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">
<link rel="stylesheet" href="./css/ripples.min.css">
<link rel="stylesheet" href="./css/sweetalert.css">
<link rel="stylesheet" href="./css/media.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="shortcut icon" href="./assets/img/favicon.png">
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/material.min.js"></script>
<script src="./js/ripples.min.js"></script>
<script src="./js/autohidingnavbar.min.js"></script>
<script src="./js/sweetalert.min.js"></script>
<script src="./js/jquery.dataTables.min.js"></script>
<script src="./js/main.js"></script>
<script>
	$(document).ready(function(){
		$.material.init();
	});
</script>
<?php include 'idsources.php';?>
<style>
	nav{
    background-color:<?php echo $headercolor; ?>;
}
    .btn-group-raised .btn.btn-info, .btn-group-raised .input-group-btn .btn.btn-info, .btn.btn-fab.btn-info, .btn.btn-raised.btn-info, .input-group-btn .btn.btn-fab.btn-info, .input-group-btn .btn.btn-raised.btn-info {
    background-color: <?php echo $headercolor; ?>;
}
    .btn-group-raised .btn:not(.btn-link).active.btn-info, .btn-group-raised .btn:not(.btn-link):active.btn-info, .btn-group-raised .btn:not(.btn-link):focus.btn-info, .btn-group-raised .btn:not(.btn-link):hover.btn-info, .btn-group-raised .input-group-btn .btn:not(.btn-link).active.btn-info, .btn-group-raised .input-group-btn .btn:not(.btn-link):active.btn-info, .btn-group-raised .input-group-btn .btn:not(.btn-link):focus.btn-info, .btn-group-raised .input-group-btn .btn:not(.btn-link):hover.btn-info, .btn.btn-raised:not(.btn-link).active.btn-info, .btn.btn-raised:not(.btn-link):active.btn-info, .btn.btn-raised:not(.btn-link):focus.btn-info, .btn.btn-raised:not(.btn-link):hover.btn-info, .input-group-btn .btn.btn-raised:not(.btn-link).active.btn-info, .input-group-btn .btn.btn-raised:not(.btn-link):active.btn-info, .input-group-btn .btn.btn-raised:not(.btn-link):focus.btn-info, .input-group-btn .btn.btn-raised:not(.btn-link):hover.btn-info {
    background-color: <?php echo $footercolor; ?>;
}
    footer{
    background-color: <?php echo $footercolor; ?>;
}
    .text-footer{
    color: <?php echo $fontcolor; ?>;
}
     .btn-group-raised .btn.btn-primary, .btn-group-raised .input-group-btn .btn.btn-primary, .btn.btn-fab.btn-primary, .btn.btn-raised.btn-primary, .input-group-btn .btn.btn-fab.btn-primary, .input-group-btn .btn.btn-raised.btn-primary {
    background-color: <?php echo $footercolor; ?>;
}
    .btn-group-raised .btn:not(.btn-link).active.btn-primary, .btn-group-raised .btn:not(.btn-link):active.btn-primary, .btn-group-raised .btn:not(.btn-link):focus.btn-primary, .btn-group-raised .btn:not(.btn-link):hover.btn-primary, .btn-group-raised .input-group-btn .btn:not(.btn-link).active.btn-primary, .btn-group-raised .input-group-btn .btn:not(.btn-link):active.btn-primary, .btn-group-raised .input-group-btn .btn:not(.btn-link):focus.btn-primary, .btn-group-raised .input-group-btn .btn:not(.btn-link):hover.btn-primary, .btn.btn-raised:not(.btn-link).active.btn-primary, .btn.btn-raised:not(.btn-link):active.btn-primary, .btn.btn-raised:not(.btn-link):focus.btn-primary, .btn.btn-raised:not(.btn-link):hover.btn-primary, .input-group-btn .btn.btn-raised:not(.btn-link).active.btn-primary, .input-group-btn .btn.btn-raised:not(.btn-link):active.btn-primary, .input-group-btn .btn.btn-raised:not(.btn-link):focus.btn-primary, .input-group-btn .btn.btn-raised:not(.btn-link):hover.btn-primary {
    background-color: <?php echo $headercolor; ?>;
}
    #container-form{
    border: 2px dashed <?php echo $footercolor; ?>;
}
    .text-primary {
    color: <?php echo $headercolor; ?>;
}
    .radio input[type=radio]:checked~.check, label.radio-inline input[type=radio]:checked~.check {
    background-color: <?php echo $fontcolor; ?>;
}
    .panel.panel-info>.panel-heading {
    background-color: <?php echo $footercolor; ?>
}
    .nav-tabs {
    background: <?php echo $headercolor; ?>;
}
    a, a:focus, a:hover {
    color: <?php echo $fontcolor; ?>;
}
    .form-group.is-focused label, .form-group.is-focused label.control-label{
    color: <?php echo $fontcolor; ?>;
}
    .form-group.is-focused .form-control{
    outline:0;
    background-image:-webkit-gradient(linear,left top,left bottom,from(<?php echo $fontcolor; ?>),to(<?php echo $fontcolor; ?>)),-webkit-gradient(linear,left top,left bottom,from(#D2D2D2),to(#D2D2D2));
    background-image:-webkit-linear-gradient(<?php echo $fontcolor; ?>,<?php echo $fontcolor; ?>),-webkit-linear-gradient(#D2D2D2,#D2D2D2);
    background-image:-o-linear-gradient(<?php echo $fontcolor; ?>,<?php echo $fontcolor; ?>),-o-linear-gradient(#D2D2D2,#D2D2D2);
    background-image:linear-gradient(<?php echo $fontcolor; ?>,<?php echo $fontcolor; ?>),linear-gradient(#D2D2D2,#D2D2D2);
    -webkit-background-size:100% 2px,100% 1px;background-size:100% 2px,100% 1px;
    -webkit-box-shadow:none;box-shadow:none;-webkit-transition-duration:.3s;
    -o-transition-duration:.3s;transition-duration:.3s;
}
    .radio input[type=radio]:checked~.circle, label.radio-inline input[type=radio]:checked~.circle {
    border-color:<?php echo $fontcolor; ?>;
}
    @media (max-width: 767px){
    #mobile-menu-list {
    background-color: <?php echo $headercolor; ?>;
    box-shadow: 0px 2px 7px #3b3b3b;
    z-index: 100;
    color: #fff;
}
}

.btn_box>button {
    background:<?php echo $fontcolor; ?>;
</style>