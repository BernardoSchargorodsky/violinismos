<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesWarning.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif&display=swap" rel="stylesheet">
    <link href="reset.css" rel="reset">
    <script src="https://kit.fontawesome.com/0a18d471b6.js" crossorigin="anonymous"></script>
    <title>¡Ups! Algo salió mal</title>
</head>
<body class="font">
    <?php 
    require_once 'header.php' 
    ?>
<section id="error">
<article class="error">
    <h1>¡Lo sentimos!</h1>
    <h2>No pudimos procesar tu formulario</h2>
    <p>Hubo algún problema en la carga de datos, ¡pero no desesperes! Probá de nuevo.</p>
    <button id="submit"><a href="contact.php" rel="contact">Reintentar</a></button>
</article>
</section>
    <?php 
    require_once 'footer.php' 
    ?>
</body>
</html>