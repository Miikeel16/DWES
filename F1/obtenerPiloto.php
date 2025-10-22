<?php
function obtenerPiloto($numeroPiloto) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.openf1.org/v1/drivers?driver_number=$numeroPiloto&session_key=latest",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        echo "<p>Error curl #:" . htmlspecialchars($err) . "</p>";
        return null;
    }

    $data = json_decode($response, true);
    return $data[0] ?? null;
}

$pilotos = [
    obtenerPiloto(16),
    obtenerPiloto(44),
];

echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; text-align: center;'>";
echo "<tr style='background-color: #ddd;'>
        <th>Numero</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Equipo</th>
        <th>Abreviatura</th>
      </tr>";

foreach ($pilotos as $p) {
    if ($p) {
        echo "<tr>
                <td>{$p['driver_number']}</td>
                <td>{$p['first_name']}</td>
                <td>{$p['last_name']}</td>
                <td>{$p['team_name']}</td>
                <td>{$p['name_acronym']}</td>
              </tr>";
    } else {
        echo "<tr><td colspan='5'>No se pudo obtener información del piloto</td></tr>";
    }
}

echo "</table>";
?>

<!-- 
PARTE EXTRA: 
El foro que nos has mandado dice que para llamar a una API con POST en PHP puedes usar curl: inicias curl (curl_init()), pones la URL y los datos a enviar (curl_setopt() con CURLOPT_POSTFIELDS), ejecutas la petición (curl_exec()) y cierras curl (curl_close()). La respuesta la recibes en JSON y la conviertes a array con json_decode(). -->
