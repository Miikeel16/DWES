<?php
function obtenerPiloto($numeroPiloto) {
    $url = "https://api.openf1.org/v1/drivers?driver_number=$numeroPiloto&session_key=latest";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $respuesta = curl_exec($curl);

    if ($respuesta === false) {
        // echo "Error curl: " . curl_error($curl) .;
        curl_close($curl);
        return null;
    }

    curl_close($curl);
    return json_decode($respuesta, true)[0] ?? null;
}

$piloto16 = obtenerPiloto(16);
$piloto44 = obtenerPiloto(44);

print_r($piloto16);
print_r($piloto44);
?>

<!-- 
PARTE EXTRA: 
El foro que nos has mandado dice que para llamar a una API con POST en PHP puedes usar curl: inicias curl (curl_init()), pones la URL y los datos a enviar (curl_setopt() con CURLOPT_POSTFIELDS), ejecutas la petición (curl_exec()) y cierras curl (curl_close()). La respuesta la recibes en JSON y la conviertes a array con json_decode(). -->
