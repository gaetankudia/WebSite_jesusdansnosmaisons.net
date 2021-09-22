<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jesus dans nos maisosn</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/icon.png">

    <!-- Google font (font-family: 'Roboto', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Google font (font-family: 'Roboto Condensed', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">

    <!-- Cusom css -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

        <!-- Header -->
        <header class="header header-style-1 theme-color transparent-header megamenu-container sticky-header">

            <div class="container d-none d-lg-block">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-inner">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo/logo-theme-light.png" alt="logo secondary dark">
                                </a>
                            </div>
                            <nav class="menu">
                                <ul>
                                    <li class="cr-dropdown"><a href="index.php">Accueil</a></li>
                                    <?php if($Action!="About"){echo "<li class='cr-dropdown'><a href='index.php?Module=Global&Action=About'>A propos</a></li>";}  ?>
                                    <?php if($Action!="Videos"){echo " <li class='cr-dropdown'><a href='index.php?Module=Media&Action=Videos'>Nos enseignements</a></li>";}  ?>
                                    <?php if($Action!="Help"){echo "<li class='cr-dropdown'><a href='index.php?Module=Global&Action=Help'>Besoin d'aide?</a></li> ";}  ?>
                                        <?php if($Action!="Blog"){echo " <li class='cr-dropdown'><a href='index.php?Module=Blog&Action=Blog'>Témoignages</a></li>  ";}  ?>
                                </ul>
                            </nav>
                            <a href="index.php?Module=Global&Action=Partenaire" class="cr-btn cr-btn-sm cr-btn-round">
                                <span>Soutenir cette oeuvre</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu-wrapper">
                <div class="container d-block d-lg-none">
                    <div class="mobile-menu clearfix">
                        <a class="mobile-logo" href="index.php">
                            <img src="images/logo/logo-theme-light.png" alt="mobile logo">
                        </a>
                        <a href="#" class="cr-btn cr-btn-sm cr-btn-round">
                            <span>Soutenir cette oeuvre</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- //Mobile Menu -->

        </header>
        <!-- //Header -->