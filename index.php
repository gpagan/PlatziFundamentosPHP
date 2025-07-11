<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Platzi - Curso Fundamentos de PHP</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        body {
            background-color: #000;
        }

        .card {
            width: 90%;
            margin: auto
        }

        .page {

            margin-top: 50px;
            margin-bottom: 50px;
        }

        .float-right.headingright {
            color: #153063;
            font-weight: 500;
            margin-top: 10px
        }

        .float-right {
            color: #7a7a7a;
            font-weight: 450
        }

        .today,
        .tomorrow {
            color: #153063;
            font-size: 25px;
            font-weight: 600
        }

        .heading2 {
            margin-top: 6%
        }

        .fa-calendar,
        .fa-circle-thin,
        .fa-star {
            color: #7a7a7a
        }

        .time {
            color: #7a7a7a;
            font-size: 12px
        }

        .fa-plus {
            display: inline-block;
            border-radius: 25px;
            background-color: #e3e1e1;
            color: #7a7a7a;
            size: 10px;
            padding: 2px
        }

        .task {
            color: #153063;
            font-weight: 500
        }

        .task2 {
            opacity: 0.5
        }

        .fa-thumb-tack,
        .fa-exchange,
        .fa-user {
            background-color: #7a7a7a;
            color: white;
            display: inline-block;
            border-radius: 25px;
            padding: 3px
        }

        .card-body {
            margin: 2%
        }

        .card-header {
            margin-left: 5%;
            margin-right: 5%;
            background-color: white !important;
            padding: 0px;
            margin-top: 2%
        }

        .navTask {
            color: #136fe8;
            border-bottom: solid 1px #136fe8
        }

        .fa-bars {
            color: #136fe8
        }

        @media only screen and (max-width: 600px) {
            .card {
                font-size: 11px
            }

            .time {
                font-size: 6px
            }
        }
    </style>
</head>

<body className='snippet-body'>
    <!--For Page-->
    <div class="page">
        <!--Card-->
        <div class="card">
            <!--Card Header-->
            <div class="card-header">
                <h2><i class="fa fa-certificate" aria-hidden="true"></i> Cunrso Fundamentos de PHP <span class="float-right headingright"> <i class="fa fa-id-card-o" aria-hidden="true"></i> Italo Morales Fantone</span></h2>
            </div>
            <!--Card Body-->
            <div class="card-body">
                <p class="heading1"> <span class="today">Clases</span> </p>
                <p> <i class="fa fa-code ml-2" aria-hidden="true"></i>
                    <span class="task mt-4"><a href="01_variables.php" class="navTask">Creación y uso de variables en PHP</a></span>
                    <span class="time ml-2"><a href="https://platzi.com/cursos/fundamentos-php/creacion-y-uso-de-variables-en-php/" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i> Video Clase </a></span>
                    <span class="float-right">4:33 min</span>
                </p>

                <hr>
                <p class="heading2"><span class="tomorrow">Autor</span></p>
                <p class="task2 mt-4"><i class="fa fa-user-circle" aria-hidden="true"></i> Guillermo Pagan</span>
                </p>
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