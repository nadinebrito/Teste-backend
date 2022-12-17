<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Escrever Matéria</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" href="../../../app-assets/vendors/select2/select2.min.css" type="text/css">
    <link rel="stylesheet" href="../../../app-assets/vendors/select2/select2-materialize.css" type="text/css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/page-account-settings.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">
    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        
    </header>
    <!-- END: Header-->
    
    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div id="breadcrumbs-wrapper" data-image="../../../app-assets/images/gallery/breadcrumb-bg.jpg">
            <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Escrever Matéria</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="page_list_news.php">Lista de Notícias</a>
                                </li>
                                <li class="breadcrumb-item active">Escrever Matéria
                                </li>
                            </ol>
                        </div>
                    </div>
            </div>              
            </div>
            <div class="col s12">
                <div class="container">
                    <!-- Account settings -->
                    <section class="tabs-vertical mt-1 section">
                        <div class="row">  
                            <div class="col l8 s12">
                                <!-- tabs content -->
                                <div id="general">
                                    <div class="card-panel">
                                        <form method="post" action="page_news_create_process.php">
                                            <div class="row">
                                                <div class="col s12">
                                                    <div class="input-field">
                                                        <label for="titulo">Título</label>
                                                        <input type="text" id="titulo" name="titulo" data-error=".errorTxt1">
                                                        <small class="errorTxt1"></small>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <div class="input-field">
                                                        <label for="conteudo">Conteúdo</label>
                                                        <textarea id="conteudo" name="conteudo" type="text" data-error=".errorTxt2">
                                                        </textarea> 
                                                    </div>
                                                <div class="col s12">
                                                    <div class="input-field">
                                                        <label for="url_noticia">URL Fonte da Notícia</label>
                                                        <input id="url_noticia" type="text" name="url_noticia" data-error=".errorTxt3">
                                                        <small class="errorTxt3"></small>
                                                    </div>
                                                </div>
                                                <div class="col s12 display-flex justify-content-end form-action">
                                                    <button type="submit" class="btn indigo waves-effect waves-light mr-2">
                                                        Salvar Notícia
                                                    </button>
                                                    <a href="page_show_news.php">
                                                    <button type="button" class="btn btn-light-pink waves-effect waves-light mb-1">Cancelar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                    </section>
                </div>
                <div class="content-overlay"></div>
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
    <script src="../../../app-assets/vendors/select2/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js"></script>
    <script src="../../../app-assets/js/search.js"></script>
    <script src="../../../app-assets/js/custom/custom-script.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/page-account-settings.js"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>