<!DOCTYPE html>
<html>
<head>
    <title>Index page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>

<div class="container">
    <div class="row">
        
        <div class="col s12 m12 l12 center">
            <h1>¿Que es Docker?</h1>
        </div>

        <div class="col s12 m12 l12 center">
                <p>Docker es un proyecto de código abierto que automatiza el despliegue de aplicaciones dentro de contenedores de software,
            proporcionando una capa adicional de abstracción y automatización de virtualización de aplicaciones en múltiples sistemas 
            operativos.1​Docker utiliza características de aislamiento de recursos del kernel Linux, tales como cgroups y espacios de nombres
            (namespaces) para permitir que "contenedores" independientes se ejecuten dentro de una sola instancia de Linux, evitando la sobrecarga
            de iniciar y mantener máquinas virtuales.​</p>

            <?php

$image = 'https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/97_Docker_logo_logos-512.png';
$imageData = base64_encode(file_get_contents($image));
echo '<img class="responsive-img" width="200px" src="data:image/jpeg;base64,'.$imageData.'">';
?>


        </div>

        <div class="col s12 m12 l12 center">
            <button class="waves-effect waves-light btn" onclick="window.location.href='contact.php'">Contacto</button>
        </div>
    </div>
</div>


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
