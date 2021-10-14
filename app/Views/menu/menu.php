
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <script src="https://kit.fontawesome.com/26f92a995a.js" crossorigin="anonymous"></script>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <link rel="stylesheet" href="<?php base_url();?>public/css/menu.css">
    <link rel="icon" href="<?php base_url();?>public/img/codep.png">
    <title>Reporteria Wamba</title>
</head>
<body>
<header class="header" id="header">
   
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="/reportes" class="nav__logo">
                    <img src="<?php base_url();?>public/img/codep.png" style="height: 24px; width: 24px;">
                    <span class="nav__logo-name">Wamba-Reportes</span>
                </a>

                <div class="nav__list">
                    <a href="proyectos.php" class="nav__link ">
                    <i title="PROYECTOS"><span class="iconify" data-icon="bx:bx-donate-heart"></span></i>
                        <span class="nav__name">Proyectos</span>
                    </a>

                    <a href="index.php" class="nav__link ">
                    <i title="COMERCIOS"><span class="iconify" data-icon="uil:store-alt" ></span></i>
                        <span class="nav__name">Comercios</span>
                    </a>

                    <a href="transacciones.php" class="nav__link">
                    <i title="TRANSACCIONES"><span class="iconify" data-icon="uil:shopping-cart" ></span></i>
                        <span class="nav__name">Transacciones</span>
                    </a>

                    <a href="Materiales.php" class="nav__link">
                    <i title="MATERIALES"><span class="iconify" data-icon="uil:trash-alt" ></span></i>
                   
                        <span class="nav__name">Materiales</span>
                    </a>
                   

                    <a href="usuarios.php" class="nav__link">
                    <span class="iconify" data-icon="clarity:users-line"></span>
                        <span class="nav__name">Usuarios</span>
                    </a>
                </div>
            </div>

            <a href="login.php" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
