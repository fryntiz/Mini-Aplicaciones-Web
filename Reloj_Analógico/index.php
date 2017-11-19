<!DOCTYPE html>
<HTML lang="es">
<HEAD>
    <TITLE>Reloj Analógico</TITLE>
    <META charset="utf-8"/>
    <META name="description" content="Mostrar tiempo de carga de la página"/>
    <META name="keywords" content="reloj, analógico, hora, tiempo, ejemplo, plantilla, programación, Raúl Caro Pastorino, Fryntiz"/>
    <META name="author" content="Raúl Caro Pastorino"/>
    <LINK rel="shortcut icon" href="./images/favicon.png"/>
    <LINK rel="stylesheet" href="./CSS/styles.css"/>
    <SCRIPT src="JS/scripts.js"></SCRIPT>
</HEAD>

<BODY onload="funcionReloj()"><!--Funcion JS al cargar página-->
    <H1>Reloj Analógico</H1>
    <H2>Aplicación que contiene un reloj Analógico</H2>
    <P>La hora que establece este reloj será tomada desde el ordenador del cliente (No desde el servidor)</P>

<!--Caja que contiene el reloj-->
    <DIV id="CajaReloj">
        <IMG id="segundos" src="./images/Aguja3.png" alt="Manilla segundos reloj"/>
        <IMG id="minutos" src="./images/Aguja2.png" alt="Manilla pequeña reloj"/>
        <IMG id="hora" src="./images/Aguja1.png" alt="Manilla grande reloj"/>
    </DIV>
<!--Fin del reloj-->
</BODY>
</HTML>
