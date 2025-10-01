<?php

    $array=$_POST;

    print_r($_POST);



    if(!empty($_POST["name"]) && trim($_POST["name"])){
        $nombre=$_POST["name"];
        echo '<br/><br/>Nombre: '.$nombre;
    }


    if(!empty($_POST["surname"]) && trim($_POST["surname"])){
        $apellido=$_POST["surname"];
        echo '<br/><br/>Apellido: '.$apellido;
    }


    if(!empty($_POST["password"]) && trim($_POST["password"])){
        $pw=$_POST["password"];
        echo '<br/><br/>Contraseña: '.$pw;
    }


    $pais=$_POST["selectCountry"];
    echo '<br/><br/>País: '.$pais;


    if(isset($_POST["clothes"])){
        $ropa=$_POST["clothes"];
        echo '<br/><br/>Ropa: '.$ropa;
    }


    if(isset($_POST["condition"])){
        $condicion=$_POST["condition"];

        foreach($condicion as $i=>$cond){
            echo '<br/><br/>Condicion: '.$cond;
        }
    }


    if(isset($_POST["transport"])){
        $transporte=$_POST["transport"];
        echo '<br/><br/>Transporte: '.$transporte;
    }


    if(isset($_POST["conditions"])){
        $tc=$_POST["conditions"];
        echo '<br/><br/>Términos y Condiciones: '.$tc;
    }

?>