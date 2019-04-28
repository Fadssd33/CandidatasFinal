<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbarRosa.php';
?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="<?=base_url?>assets/css/about.css">
<body>
<br><br><br><br><br>
<div class="sobreNosotros">
    <div class="section section-small section-get-started">
    <div class="title-area">
                <h2 class="text-black">Nuestro Equipo</h2>
                <div class="separator line-separator">♦</div>
                <p class="description">Somos Las Perras, estudiantes de Ingenieria en Software en la Universidad Estatal de Sonora</p>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="<?=base_url?>assets\img\equipo\ferga.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="name">Fernanda Licón</h3>
                            <h4 class="title">Back End</h4>
                        </div>
                        <ul class="social">
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook"
                                    aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                    aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus"
                                    aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                    aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="<?=base_url?>assets\img\equipo\LeoGay.jpeg">
                        </div>
                        <div class="team-content">
                            <h3 class="name">Leonel Bustamante</h3>
                            <h4 class="title">Front End</h4>
                        </div>
                        <ul class="social">
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook"
                                    aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                    aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus"
                                    aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                    aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
                        </div>
                        <div class="team-content">
                            <h3 class="name">Cota</h3>
                            <h4 class="title">QA</h4>
                        </div>
                        <ul class="social">
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook"
                                    aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter"
                                    aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus"
                                    aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin"
                                    aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</body>
<?php
    require_once 'views/layout/footer.php';
?>