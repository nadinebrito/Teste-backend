<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
</html>
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Artigo</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/page-blog.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">
    <?php
    include 'index.php';
    ?>
    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
    </header>
    <!-- END: Header-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div id="breadcrumbs-wrapper" data-image="../../../app-assets/images/gallery/breadcrumb-bg.jpg">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Artigo</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="page_list_news.php">Lista de Notícias</a>
                                </li>
                                <li class="breadcrumb-item"><a href="page_show_news.php">Últimas Notícias</a>
                                </li>
                                <li class="breadcrumb-item active">Artigo
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section mt-2" id="blog-list">
                        <div class="row">
                            <!-- Blog Style Two -->
                            <!-- Mostrar o artigo -->
                            <?php
                            $id = $_GET['id'];
                            echo '<div class="col s22 m6 24">';
                            echo '<div class="card-panel border-radius-6 white-text gradient-45deg-indigo-light-blue card-animation-2">';
                            echo '<h6 class="mt-5"><b class="white-text">';
                            echo '<span>';
                            for ($i=0; $i < count($select) ; $i++) { 
                                if($select[$i]["id"]==$id){
                                    print_r($select[$i]["titulo"]);
                                    echo '#';
                                    print_r($select[$i]["id"]);
                                    echo '<br><h7 class="mt-5"><b class="white-text"><span>';
                                    print_r($select[$i]["data"]);
                                    echo '</span><br><br><span>';
                                    print_r($select[$i]["conteudo"]);
                                    echo '</span></div></div>';
                                }
                            }
                            ?>
                            
                        </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2020 <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
        </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js"></script>
    <script src="../../../app-assets/js/search.js"></script>
    <script src="../../../app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
</body>

</html>