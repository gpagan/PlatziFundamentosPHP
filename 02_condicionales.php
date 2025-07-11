<?php
$course = "Curso de PHP";
$archived = true; // false
$status = $archived ? "archivado" : "activo"; // Ternary operator
?>
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>02_condicionales.php - Curso Fundamentos de PHP</title>
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
                <h2><i class="fa fa-angle-double-left" aria-hidden="true"></i> <a href="index.php">Regresar</a> <span class="float-right headingright"> <i class="fa fa-code" aria-hidden="true"></i> Condicionales en PHP para mostrar información dinámica</span></h2>
            </div>
            
            <!--Card Body-->
            <div class="card-body">

    <h1>Bienvenido al <?= $course ?></h1>

    <p>
        <?php if ($archived): ?>
            <strong>Este curso está archivado</strong>
        <?php else: ?>
            <strong>Este curso está activo</strong>
        <?php endif; ?>        
    </p>

            <pre>
                    <code>
                        <?= htmlspecialchars('<?php if ($archived): ?>
                        <strong>Este curso está archivado</strong>
                        <?php else: ?>
                        <strong>Este curso está activo</strong>
                        <?php endif; ?>') ?>
                    </code>
                </pre>

    <p>
        <strong>Este curso está</strong> <?= $status ?>
    </p>



                <p class="task2 mt-4">Estos son los ejercicios estudiados en la clase.</p>
                <hr>
                <p class="heading2"><span class="tomorrow">Resumen</span> <span class="float-right headingright"><a href="https://platzi.com/cursos/fundamentos-php/creacion-y-uso-de-variables-en-php/"><i class="fa fa-youtube-play" aria-hidden="true"></i> Video Clase </a>4:33 min</span> </p>

<p>Aprender a usar condicionales en PHP es esencial para tomar decisiones correctas en el desarrollo web. Los condicionales permiten mostrar información específica según el estado de un elemento como, por ejemplo, avisar si un curso está archivado o activo. Esto facilita que los alumnos entiendan rápidamente la relevancia del material publicado.</p>

<h4>¿Qué son los condicionales y para qué sirven en PHP?</h4>
<p>Los condicionales son estructuras que permiten evaluar una condición y ejecutar ciertas instrucciones dependiendo del resultado. En PHP, estas condiciones se pueden escribir de diferentes formas para mantener claro y ordenado tu código.</p>

<h4>¿Cómo mostrar información básica sobre el estado de un curso?</h4>
<p>La forma más sencilla de implementar un condicional es utilizando un bloque de PHP que verifica si una variable tiene valor <code>true</code> (verdadero) o no. Puede verse así:</p>
<pre>
    <code>
        <?= htmlspecialchars('<?php
$estaArchivado = true;

if ($estaArchivado) {
  echo "Este curso está archivado. Es responsabilidad del alumno si desea tomar este curso con información desactualizada.";
} else {
  echo "Este curso está activo.";
}
?>') ?>
    </code>
</pre>

<h4>¿Cómo separar lógica de presentación utilizando PHP y HTML?</h4>
<p>Otra manera popular es separar claramente la lógica del código PHP y la presentación en HTML, lo que genera un código limpio y más mantenible:</p>
<pre>
    <code>
        <?= htmlspecialchars('<?php if ($estaArchivado): ?>
<p>Este curso está archivado.</p>
<?php else: ?>
<p>Este curso está activo.</p>
<?php endif; ?>') ?>
    </code>
</pre>
<p>Esta metodología permite mantener un código ordenado, donde la programación se centra en procesar y decidir, dejando la presentación exclusivamente para HTML.</p>

<h4>¿Qué es el operador ternario en PHP y qué ventajas ofrece?</h4>
<p>El operador ternario reduce el condicional a una sola línea de código, útil para simplificar y aclarar rastros de programación:</p>
<pre>
    <code>
        <?= htmlspecialchars('<?php
$estatus = $estaArchivado ? "archivado" : "activo";
echo "Este curso está $estatus.";
?>') ?>
    </code>
</pre>
<p>Esto facilita que tu aplicación mantenga la legibilidad del código y una estructura clara y definida en instrucciones sencillas.</p>

<h4>¿Cómo aplicar diferentes mensajes según niveles del curso?</h4>
<p>Puedes extender el uso de condicionales generando un mensaje según el nivel de dificultad de los cursos. Aquí tienes una guía práctica:</p>
<ul>
    <li><strong>Básico:</strong> Mensaje: "Recomendado para quienes recién comienzan en programación."</li>
    <li><strong>Intermedio:</strong> Mensaje: "Recomendado para estudiantes que tienen conocimientos básicos de programación."</li>
    <li><strong>Avanzado:</strong> Mensaje: "Este curso es ideal para estudiantes con conocimientos sólidos de programación."</li>
</ul>
<p>Implementar estos condicionales mejorará significativamente la gestión de contenidos según las necesidades y perfil del estudiante.</p>

<p>Te invitamos a implementar estos conceptos en tu próximo proyecto, ¡comparte tus resultados o dudas sobre

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