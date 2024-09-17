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
            <h1>Hola! soy Rolando</h1>
        </div>


            <?php

$image = 'https://external-preview.redd.it/9iwY3G1cwlPYqvNkTn0KImkQAidPWwv97pfxVbt9uzc.jpg?auto=webp&s=2a74d7f81a4e7b16abd38a97396814ea6220cc57';
$imageData = base64_encode(file_get_contents($image));
echo '<img class="responsive-img" width="700px" src="data:image/jpeg;base64,'.$imageData.'">';
?>


        </div>

        <div class="col s12 m12 l12 center">
            <button class="waves-effect waves-light btn" onclick="window.location.href='index.php'">¿Que es Docker?</button>
        </div>
    </div>
</div>


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
