<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbarRosa.php';
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
                    <h3>De manera analitica se maneja en este apartado, donde encontraras los porcentajes obtenidos en base a los votos por los estudiantes que han participado.</h2>
                        <div class="separator line-separator">♦</div>
                </div>
 
  <!--JAJA no se podia centar la caja de abajo.. y cree otra ;* -->
                <div class='ui'  >
                    <div class='col-md-4' >
                    </div>
                </div>

                <div class='ui'  >
                    <div class='col-md-4' >
                        <div class='ui_box' >
                            <div class='ui_box__inner'>
                                <h2>
                                    Alumnos que han votado
                                </h2>
                                <!-- <p>Lorem ipsum dolor sit amet</p> -->
                                <div class='stat'>
                                    <span><?=stats::getPorcentajeVotos()?>%</span>
                                </div>
                                <div class='progress'>
                                    <div class='progress_bar'
                                        style="height: 6px;float: left;width: <?=stats::getPorcentajeVotos()?>%;background: #ec6565;webkit-animation: bar 2s;">
                                    </div>
                                </div>
                                <p>Observa el porcentaje total de los estudiantes quienes han participado hasta el momento.</p>
                            </div>
                            <!-- <div class='drop'>
                                <p>Take a closer look</p>
                                <div class='arrow'></div>
                            </div> -->
                        </div>
                    </div>
                    
                    <!--fin div box -->

                </div>
            </div>
        </div>
    </div>




<!-- Votos por candidata -->

<link rel="stylesheet" href="<?=base_url?>assets/css/stats.css">
    <div class="section section-our-team-freebie">
        <div class="image" style="background-image:url('assets/img/header-2.jpeg')">
        </div>
        <div class="container">
            <div class="content">
                <div class="title-area">

                    <h1 class="title-modern">Votos por candidata</h1>
                    <h3>Aqui encontraras el porcentaje de votos por candidatas, tambien puedes buscar por tu favorita</h2>
                        <div class="separator line-separator">♦</div>
                </div>


                <div class='ui'>

                <?php while ($can = $candidatasStats->fetch_object()):?>
                    <div class='col-md-4'>
                        <div class='ui_box'>
                            <div class='ui_box__inner'>
                                <h2>
                                    <?=$can->Nombre?>
                                </h2>
                                <!-- <p>Lorem ipsum dolor sit amet</p> -->
                                <div class='stat'>
                                    <span><?=stats::getPorcentajeVotosCandidata($can->CandidataID)?>%</span>
                                </div>
                                <div class='progress'>
                                    <div class='progress_bar'
                                        style="height: 6px;float: left;width: <?=stats::getPorcentajeVotosCandidata($can->CandidataID)?>%;background: #ec6565;webkit-animation: bar 2s;">
                                    </div>
                                </div>
                                <p>Nombre completo:<br> <?=$can->Nombre . " " .  $can->ApellidoPaterno ." ". $can->ApellidoMaterno . "<br>
                                Numero de votos: " . $can->numVotos ?></p>
                            </div>
                            <!-- <div class='drop'>
                                <p>Take a closer look</p>
                                <div class='arrow'></div>
                            </div> -->
                        </div>
                    </div>
                    <!--fin div box -->
<?php endwhile?>

                   
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

<!-- fin votos por candidata -->
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