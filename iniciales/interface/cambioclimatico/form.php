<?php

    require_once "funciones.php";

    $arrayPais=crearArrayPaises();

    $arrayContaminacion=crearArrayContaminacion();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1 id="title">FORMULARIO</h1>
        </header>

        <nav>
            <ul id="list-box">
                <li id="main-news"><a class="nav-a" href="index.html">CAMBIO CLIMÁTICO</a></li>
                <li id="news-form"><a class="nav-a" href="news.html">NOTICIA</a></li>
                <li id="board"><a class="nav-a" href="board.html">TABLA</a></li>
            </ul>
        </nav>

        <form action="recogerBienPost.php" method="post">
            <div class="boxForm" id="name">
                <label>Nombre:</label>
                <input type="text" name="name" placeholder="Adrián">
            </div>

            <div class="boxForm" id="surname">
                <label>Apellido:</label>
                <input type="text" name="surname" placeholder="Risco Sánchez">
            </div>

            <div class="boxForm" id="pw">
                <label>Contraseña:</label>
                <input type="password" name="password">
            </div>

            <div class="boxForm" id="country">
                <label>Selecciona tu País: </label>
                <select name="selectCountry">
                    <?php
                        foreach($arrayPais as $idPais=>$nombrePais){
                            echo "<option value=".$idPais.">".$nombrePais."</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="boxForm" id="clothes">
                <input type="checkbox" name="clothes">
                <label>¿Te gustaría donar ropa?</label>
            </div>

            <div class="boxForm">
                <h3>¿Qué errores has cometido que afectaron al medioambiente?</h3>
                <div>
                    <?php
                        foreach($arrayContaminacion as $condicion=>$texto){
                            echo "<input type='checkbox' name='condition[]' value='".$condicion."'>";
                            echo "<label>".$texto."</label>";
                        }
                    ?>
                </div>
            </div>

            <div class="boxForm">
                <h3>¿Qué transporte usas más?</h3>

                <input type="radio" name="transport" value="car">
                <label>Coche</label>

                <input type="radio" name="transport" value="bus">
                <label>Autobus</label>

                <input type="radio" name="transport" value="bike">
                <label>Bicicleta</label>

                <input type="radio" name="transport" value="walk">
                <label>Caminar</label>
            </div>

            <div class="boxForm" id="termsConditions">
                <input type="checkbox" name="conditions">
                <label>Aceptar Términos y Condiciones</label>
            </div>

            <div id="send">
                <button type="submit">Enviar</button>
            </div>
        </form>

        <footer>
            <p>© 2025 Adrián Risco Sánchez - Impacto del cambio climático en las personas</p>
        </footer>
    </body>
</html>