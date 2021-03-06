<!DOCTYPE html>
<html lang="pt-PT en-EN">

<head>

    <title>Hesa-soft</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="hesa-soft" content="create your imagination..." />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="shortcut icon" href="./logo/favicon.jpg">


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</head>

<body>


    <!--  MENU PRINCIPAL  "FIRTS MENU" -->

    <nav class="navbar navbar-expand-lg  fixed-top navbar-light bg-light main_nav">
        <a class="navbar-brand" href="./"><img src="/hesasoft/logo/tempLogo.png" width="60" height="40"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav box-firts-menu">
                <a class="nav-item nav-link active text-primary" href="./client/"> <i class="fas fa-users "></i> AREA DE CLIENTE <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active text-primary" href="#"> <i class="fas fa-headset"></i> CONTACTOS</a>
                <a class="nav-item nav-link active text-primary" href="#"> <i class="fas fa-laptop-code "></i> PROJECTOS</a>
                <a class="nav-item nav-link active text-primary" href="#"> <i class="fas fa-user-friends text-primary"></i> TEAM</a>
            </div>

            <div class="navbar-nav box-social">
                <a class="nav-item nav-link active" href="#"><i class="fab fa-facebook-f text-primary"></i> facebook <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="#"> <i class="fab fa-instagram  text-danger"></i> instagram</a>
                <a class="nav-item nav-link active " href="#"> <i class="fab fa-twitter text-primary"></i> twiter</a>
            </div>
        </div>


    </nav>

    <!--   SECOND MENU   "CATEGORY MENU" -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light menu-category">
        <!--  <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav categ_item">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        WEB
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"> <i class="fas fa-shopping-cart"></i> e-commerce</a>
                        <a class="dropdown-item" href="#"> <i class="fab fa-blogger"></i> blogg</a>
                        <a class="dropdown-item" href="#"> <i class="fas fa-user-graduate"></i> mooddle</a>
                        <a class="dropdown-item" href="#"> <i class="fas fa-university"></i> instituição</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-icons"></i> entertainment</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SOFTWARE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">ERP</a>
                        <a class="dropdown-item" href="#">POS</a>
                        <a class="dropdown-item" href="#">Outro</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        APP
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"> <i class="fab fa-apple"></i> iOS</a>
                        <a class="dropdown-item" href="#"> <i class="fab fa-android"></i> android</a>
                        <a class="dropdown-item" href="#"> <i class="fab fa-windows"></i> window phone</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">MARKETING DIGITAL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">SOCIAL NETWORK MANAGEMENT</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        HOSPEDAGEM WEB
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"> <i class="fab fa-linux"></i> Linux</a>
                        <a class="dropdown-item" href="#"> <i class="fab fa-windows"></i> Windows</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">B2B</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        DESIGN & FOTOGRAFIA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"> <i class="fas fa-drafting-compass"></i> Logotipos</a>
                        <a class="dropdown-item" href="#"> <i class="fas fa-object-ungroup"></i> Edição de imagem</a>
                        <a class="dropdown-item" href="#"> <i class="fas fa-camera-retro"></i> Fotografos para Eventos</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <?php
    include_once('content.php')
    ?>

    <?php
    include_once('footer.php')
    ?>

</body>

</html>