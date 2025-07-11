<?php
$course = "Curso de PHP";
$titulo = "Laravel"; 
$precio = 29.99; 
$fechaPublicacion = "15 de octubre de 2023"; 
?>

<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>01_variables.php - Curso Fundamentos de PHP</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Fira+Mono&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body className='snippet-body'>
    <!--For Page-->
    <div class="page">
        <!--Card-->
        <div class="card">
            <!--Card Header-->
            <div class="card-header">
                <h2><i class="fa fa-angle-double-left" aria-hidden="true"></i> <a href="index.php">Regresar</a> <span class="float-right headingright"> <i class="fa fa-code" aria-hidden="true"></i> Creación y uso de variables en PHP</span></h2>
            </div>
            
            <!--Card Body-->
            <div class="card-body">

                <h1>Bienvenido al <?= $course ?></h1>

                <pre>
                    <code>
                        <?= htmlspecialchars('<h1>Bienvenido al <?= $course ?></h1>') ?>
                    </code>
                </pre>

                <p>El curso <?= $titulo ?> cuesta <?= $precio ?> dólares y fue publicado el <?= $fechaPublicacion ?>.</p>


                <pre>
                    <code>
                        <?= htmlspecialchars('<p>El curso <?= $titulo ?> cuesta <?= $precio ?> dólares y fue publicado el <?= $fechaPublicacion ?>.</p>') ?>
                    </code>
                </pre>

                <p class="task2 mt-4">Estos son los ejercicios estudiados en la clase.</p>
                <hr>
                <p class="heading2"><span class="tomorrow">Resumen</span> <span class="float-right headingright"><a href="https://platzi.com/cursos/fundamentos-php/creacion-y-uso-de-variables-en-php/"><i class="fa fa-youtube-play" aria-hidden="true"></i> Video Clase </a>4:33 min</span> </p>
                <p>La dinámica de cualquier sistema web, como un sitio de cursos en línea, requiere actualizar información constante como el título, precio o fecha de publicación. Utilizar variables en PHP facilita gestionar estos cambios para mantener información precisa y actualizada de manera eficaz.</p>
                <h4>¿Por qué es importante utilizar variables en PHP?</h4>
                <p>Las variables permiten almacenar información que puede cambiar fácilmente sin necesidad de modificar la estructura básica. Al emplear estos elementos, se simplifica la actualización y reutilización de datos esenciales en la programación de una página web.</p>
<p>Un claro ejemplo es un curso con nombre variable: en un inicio podría llamarse "curso de PHP" y posteriormente cambiar a "curso profesional de PHP". En lugar de modificar manualmente cada sección, solo actualizamos un único punto.</p>
<h4>¿Cómo se crean y usan variables en PHP?</h4>
<p>Las variables en PHP siempre comienzan con el símbolo dólar ($). Para utilizarlas, primero indicamos que estamos dentro de un bloque PHP:</p>
<pre>
    <code>
        <?= htmlspecialchars('<?php $titulo = "curso profesional de PHP"; ?>') ?>
    </code>
</pre>
<p>Esto genera información dinámica reutilizable en cualquier parte del código mediante la instrucción de impresión, como:</p>
<pre>
    <code>
        <?= htmlspecialchars('<?php echo $titulo; ?>') ?>
    </code>
</pre>
<p>Para una sintaxis más simplificada, PHP ofrece una forma corta:</p>
<pre>
    <code>
        <?= htmlspecialchars('<?= $titulo ?>') ?>
    </code>
</pre>
<p>Con esta técnica sencilla puedes lograr un código limpio y rápidamente actualizable.</p>
<h4>¿Cómo practicar creando nuevas variables?</h4>
<p>Puedes ampliar tus habilidades abordando esta práctica recomendada en el curso:</p>
<ul>
    <li>Crea otras dos variables, una para almacenar el precio del curso y otra para registrar la fecha de publicación.</li>
    <li>Muestra ambas variables en pantalla generando un mensaje que incluya título, precio y fecha de publicación.</li>
</ul>
<p>Un ejemplo orientativo podría ser:</p>
<pre>
    <code>
        <?= htmlspecialchars('<?php 
          $titulo = "Laravel"; 
          $precio = 29.99; 
          $fechaPublicacion = "15 de octubre de 2023"; 
        ?>

        <p>El curso <?= $titulo ?> cuesta <?= $precio ?> dólares y fue publicado el <?= $fechaPublicacion ?>.</p>
') ?>
    </code>
</pre>
<p>Comparte tu resultado en los comentarios y así fortalece tu experiencia práctica en PHP.</p>

                <p class="task2 mt-4"><span > <i class="fa fa-user-circle" aria-hidden="true"></i> Guillermo Pagan</span> </p>
                                <p class="mt-4">
                    <a href="https://github.com/gpagan" target="_blank" style="color:#fff; background:#24292e; padding:10px 18px; border-radius:6px; text-decoration:none; font-weight:500; display:inline-block;">
                        <i class="fa fa-github" aria-hidden="true" style="font-size:20px; vertical-align:middle; margin-right:8px;"></i>
                        Visita mi GitHub
                    </a>
                </p>
            </div>
        </div>
    </div>

</body>

</html>