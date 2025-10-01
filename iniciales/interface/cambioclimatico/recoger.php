<?php

    print_r($_GET);

    $nombre=$_GET["name"];
    echo '<br/><br/>Nombre: '.$nombre;


    $apellido=$_GET["surname"];
    echo '<br/><br/>Apellido: '.$apellido;


    $pw=$_GET["password"];
    echo '<br/><br/>Contraseña: '.$pw;


    $pais=$_GET["selectCountry"];
    echo '<br/><br/>País: '.$pais;


    $ropa=$_GET["clothes"];
    echo '<br/><br/>Ropa: '.$ropa;


    $condicion=$_GET["condition"];

    foreach($condicion as $i=>$cond){
        echo '<br/><br/>Condicion: '.$cond;
    }


    $transporte=$_GET["transport"];
    echo '<br/><br/>Transporte: '.$transporte;


    $tc=$_GET["conditions"];
    echo '<br/><br/>Términos y Condiciones: '.$tc;

?>