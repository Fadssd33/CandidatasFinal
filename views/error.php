<?php 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbarRosa.php';
?>



<!------------start content ------------>




    <link rel="stylesheet" href="<?=base_url?>assets/css/error.css">
<br><br><br><br>
    <!---- Bootstrap js link local for well and modal + panels ----->

    <!---- Icon link local ----->
    <div class="all">

        <div class="wrapper">
            <div class="container-fluid" id="top-container-fluid-nav">
                <div class="container">
                    <!---- for nav container ----->
                </div>
            </div>


            <div class="container-fluid" id="body-container-fluid">
                <div class="container">
                    <!---- for body container ---->


                    <div class="jumbotron">
                        <h1 class="display-1">4<i class="fa fa-cog fa-3x"></i> 4</h1>
                        <h1 class="display-3">ERROR</h1>
                        <p class="lower-case"> Ups 🤭 la pagina que buscas no existe!</p>
                        <p class="lower-case">Intenta volviendo al inicio</p>

                    </div>

                    <!-------mother container middle class------------------->


                </div>
            </div>



            <div class="container-fluid" id="footer-container-fluid">
                <div class="container">
                    <!---- for footer container ---->
                </div>
            </div>



        </div>
    </div>


<?=require_once 'views/layout/footer.php'?>