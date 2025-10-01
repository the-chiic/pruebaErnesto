<?php

    /*$array=$_GET;

    foreach($array as $campo=>$contenido){
        if(is_array($contenido)){
            foreach($contenido as $campo=>$condicion)
            echo ($campo+1).': '.$condicion.'<br/><br/>';
        }else{
            echo $campo.': '.$contenido.'<br/><br/>';
        }
    }*/

    /*foreach($array as $campo=>$contenido){
        if(is_array($contenido)){
            foreach($contenido as $campo=>$condicion)
            echo ($campo+1).': '.$condicion.'<br/><br/>';
        }else{
            echo $campo.': '.$contenido.'<br/><br/>';
        }
    }*/


    print_r($_GET);

    if(!empty($_GET["name"])){
        $nombre=$_GET["name"];
        echo '<br/><br/>Nombre: '.$nombre;
    }

    if(!empty($_GET["surname"])){
        $apellido=$_GET["surname"];
        echo '<br/><br/>Apellido: '.$apellido;
    }

    if(!empty($_GET["password"])){
        $pw=$_GET["password"];
        echo '<br/><br/>Contraseña: '.$pw;
    }


    $pais=$_GET["selectCountry"];
    echo '<br/><br/>País: '.$pais;
    

    if(isset($_GET["clothes"])){
        $ropa=$_GET["clothes"];
        echo '<br/><br/>Ropa: '.$ropa;
    }


    if(isset($_GET["condition"])){
        $condicion=$_GET["condition"];

        foreach($condicion as $i=>$cond){
            echo '<br/><br/>Condicion: '.$cond;
        }
    }


    if(isset($_GET["transport"])){
        $transporte=$_GET["transport"];
        echo '<br/><br/>Transporte: '.$transporte;
    }


    if(isset($_GET["conditions"])){
        $tc=$_GET["conditions"];
        echo '<br/><br/>Términos y Condiciones: '.$tc;
    }

?>