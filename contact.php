<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesContact.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif&display=swap" rel="stylesheet">
    <link href="reset.css" rel="reset">
    <script src="https://kit.fontawesome.com/0a18d471b6.js" crossorigin="anonymous"></script>
    <title>VIOLINISMOS- Contacto</title>
</head>

<body class="font">
    
    <?php
    require_once 'header.php'
    ?>


    <section id="contact">
        <article class="contact_form">
            <form id="contact_form" class="form" action="form.php" method="post">
                <label for="nombre">Nombre:</label>
                <br>
                <input type="text" id="nombre" name="nombre" placeholder="Escribí tu nombre..." required>
                <br>
                <br>
                <label for="apellido">Apellido:</label>
                <br>
                <input type="text" id="apellido" name="apellido" placeholder="Escribí tu apellido..." required>
                <br>
                <br>
                <label for="e-mail">E-mail:</label>
                <br>
                <input type="text" id="e-mail" name="e-mail" placeholder="tuemail@mail.com" required>
                <br>
                <br>
                <label>¿Estudiaste violín conmigo?</label>
                <br>
                <input type="radio" id="estudiaste_violin_conmigo" name="estudiaste_violin_conmigo">
                <label for="Sí">Sí</label>
                <br>
                <input type="radio" id="estudiaste_violin_conmigo" name="estudiaste_violin_conmigo" value="No">
                <label for="No">No</label>
                <br>
                <br>
                <br>
                <label for="comentarios">Dejame tu comentario</label>
                <br>
                <textarea rows="6" cols="50" maxlength="500" id="comentarios" name="comentarios"></textarea>
                <br>
                <br>
                <br>
                <input type="submit" id="submit" value="Enviar" class="font">
            </form>
        </article>
    </section>
    
    <?php
    require_once 'footer.php'
    ?>

    <!-- js -->
    <script src="script.js"></script>

</body>

</html>