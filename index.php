<?php
// Inicializando una nueva sesión de cURL; ch = curl handle
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la petición y no mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* Ejecutar la petición y guardar el resultado */
$result = curl_exec($ch);

//una alternativa sería utilizar file_get_contents
// $result = file_get_contents(API_URL); // si solo quieres hacer un GET de una API 

// Revisar si hay un error 400 o 500
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
// Decodificar el resultado de la petición
$data = json_decode($result, true);
// Cerrar la sesión de cURL
curl_close($ch);
// var_dump($result);

// Si la petición fue exitosa, mostrar la fecha de la próxima película de Marvel
// if ($data['success']) {
//     echo "<h2>La próxima película de Marvel es el {$data['data']['date']}</h2>";
// } else {
//     echo "<h2>Hubo un error al obtener la fecha de la próxima película de Marvel</h2>";
// }

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La próxima película de Marvel">
    <meta name="keywords" content="Marvel, Película, Fecha">
    <meta name="author" content="Mario">
    <title>La próxima película de Marvel</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>

<pre style= "font-size: 8px; overflow: scroll; max-height:250px">
        <?php var_dump($data) ?>
    </pre>

<main>
    <section>
    <img 
    src = "<?= $data["poster_url"]?>" 
    width="300" 
    alt= "Poster de <?= $data['title']?>" 
    style="border-radius: 10px"
    >
    </section>
<hgroup>
    <h3><?= $data['title']?> se estrena en <?=$data["days_until"]?> días</h2>
    <p>Fecha de estreno: <?= $data['release_date']?></p>
    <p>La siguiente es <?= $data['following_production']['title']?></p>
</hgroup>
    
</main>

<style>

    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section{
        display: grid;
        justify-content: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
img{
    margin: 0 auto;

}

</style>
