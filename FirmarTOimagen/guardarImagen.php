<?php
  //Leer entrada
    $data = file_get_contents("php://input");

    // Filtrar y decodificar los datos pasados
    // Filtrando las cabeceras (data:,) part.
    $filteredData=substr($data, strpos($data, ",")+1);
    // Se necesita decodificar de base64
    $decodedData=base64_decode($filteredData);
    // Guardar al servidor
    $NombreFirma = count(glob("firmas/{*.jpg,*.gif,*.png}",GLOB_BRACE));
    $NombreFirma = "Firma".($NombreFirma + 1).".png";
    $fp = fopen('./firmas/'.$NombreFirma, 'wb');
    $ok = fwrite( $fp, $decodedData);
    fclose( $fp );
    if($ok)
        echo $NombreFirma;
    else
        echo "ERROR";
?>
