<?=include_once 'config/parameters.php' ?>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="<?=base_url?>candidata/index" class="navbar-brand"><i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                    UES - Candidatas  
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                  
                        <a  href=" https://www.ues.mx" target="_blank"><i class="fa fa-university" aria-hidden="true"></i> ues_mx</a>
                    </li>
                    <li>
                  
                        <a  href="<?=base_url?>estadisticas/index" ><i class="fa fa-university" aria-hidden="true"></i> Estadisticas</a>
                    </li>
                    <li class="dropdown">
                        <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-share-alt"></i> Siguenos
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="https://es-la.facebook.com/ues.mx/" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="https://twitter.com/ues_mx" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/ues.mx/" target="_blank"><i class="fa fa-instagram"></i> Instagram</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?php if(!isset($_SESSION['identity'])):?>
                            <a href="<?=base_url?>alumno/index" class="btn btn-danger btn-fill"> Iniciar Sesion <i class="fa fa-sign-in" aria-hidden="true"></i></a>
                            <?php else:?>
                            <a href="<?=base_url?>alumno/logout" class="btn btn-danger btn-fill">Cerrar Sesion <i class="fa fa-sign-out" aria-hidden="true"></i></a> 
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>