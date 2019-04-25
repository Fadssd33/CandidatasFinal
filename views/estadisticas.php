<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbar.php';
    require_once 'helpers/stats.php';

?>

<body>

    <link rel="stylesheet" href="<?=base_url?>assets/css/stats.css">
    <div class="section section-our-team-freebie">
        <div class="image" style="background-image:url('assets/img/header-2.jpeg')">
        </div>
        <div class="container">
            <div class="content">
                <div class="title-area">
                   
                    <h1 class="title-modern">Estadisticas</h1>
                    <h3>entium placeat dolorem error officiis libero voluptates eum nam delectus aliquid cum nemo animi, aperiam, non voluptas maxime deserunt.</h2>
                        <div class="separator line-separator">♦</div>
                </div>


                <div class='ui'>
                    <div class='col-md-4'>
                        <div class='ui_box'>
                            <div class='ui_box__inner'>
                                <h2>
                                    Alumnos que han votado
                                </h2>
                                <!-- <p>Lorem ipsum dolor sit amet</p> -->
                                <div class='stat'>
                                    <span>58%</span>
                                </div>
                                <div class='progress'>
                                    <div class='progress_bar'></div>
                                </div>
                                <p>Lorem ipsum dolor sit amet. Some more super groovy information about this stat.</p>
                            </div>
                            <!-- <div class='drop'>
                                <p>Take a closer look</p>
                                <div class='arrow'></div>
                            </div> -->
                        </div>
                    </div>
                    <!--fin div box -->
                    <div class='col-md-4'>
                        <div class='ui_box'>
                            <div class='ui_box__inner'>
                                <h2>
                                    Candidatas mas votadas
                                </h2>
                                <!-- <p>Lorem ipsum dolor sit amet</p> -->
                                <div class='stat_left'>
                                    <ul>
                                        <li>
                                            <?=stats::getPorcentajeVotos()?>
                                        </li>
                                        <li>
                                        <button onclick="changeStatBar()">Click me</button> 
                                        </li>
                                        <li>
                                            Entertainment
                                        </li>
                                       
                                    </ul>
                                </div>
                                <div class='progress_graph'>
                                    <div class='progress_graph__bar--1'></div>
                                    <div class='progress_graph__bar--2'></div>
                                    <div class='progress_graph__bar--3'></div>
                                </div>
                                <p>Lorem ipsum dolor sit amet. Some more super groovy information.</p>
                            </div>
                            <div class='drop'>
                                <p>Take a closer look</p>
                                <div class='arrow'></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class='col-md-4'>
                            <div class='ui_box'>
                                <div class='ui_box__inner'>
                                    <h2>
                                        Total Sales
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <div class='stat'>
                                        <span>$34,403.93</span>
                                    </div>
                                    <div class='progress'>
                                        <div class='progress_bar--two'></div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet. Some more super groovy information about this stat.
                                    </p>
                                </div>
                                <div class='drop'>
                                    <p>Take a closer look</p>
                                    <div class='arrow'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Script para modificar la barra de alumnos que han votado -->
    <script src='<?=base_url?>assets/js/stats.js'></script>
    <script
        src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'>
    </script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
    /* Nope, not today */
    //# sourceURL=pen.js
    </script>

</body>
<?php
    //footer
    require_once 'views/layout/footer.php'
?>