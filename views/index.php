<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbar.php';
?>
<!-- contenido -->
<link rel="ICON" href="assets/img/UESlogos.ico">
<!-- assets/img/header-1.jpeg -->
<div class="section section-header">
    <div class="parallax filter filter-color-red">
        <div class="image" style="background-image: url('<?=base_url?>assets/img/UESMain.jpg')">

        </div>
        <div class="container">
            <div class="content">
                <div class="title-area">
                    <!-- Si se mando el voto -->
                    <?php if(isset($_SESSION['votoCompletado']) && $_SESSION['votoCompletado'] == "complete"):?>
                    <p>Voto agregado correctamente</p>
                    <?php elseif(isset($_SESSION['votoCompletado']) && $_SESSION['votoCompletado'] !="complete"):?>
                    <p>Tu voto no pudo ser registrado, intentalo nuevamente</p>
                    <?php endif; ?>
                    <!-- borra sesion votoCompletado -->
                    <?= Utils::deleteSession('votoCompletado');?>

                    <p>Evento anual estudiantil de las...</p>
                    <h1 class="title-modern">Candidatas UES</h1>
                    <?php if(!isset($_SESSION['identity'])):?>
                    <h3>Inicia sesion para votar por la mas guapa 🌚</h2>
                        <div class="separator line-separator">♦</div>
                </div>

                <div class="button-get-started">
                    <a href="<?=base_url?>alumno/index" class="btn btn-white btn-fill btn-lg ">
                        Iniciar Sesion
                    </a>
                </div>
                <?php else: ?>
                <h3>Bienvenido <?= $_SESSION['identity']->apellidoPaterno?></h2>
                    <div class="separator line-separator">♦</div>
            </div>

            <div class="button-get-started">
                <a href="<?=base_url?>candidata/listadoCandidatas" class="btn btn-white btn-fill btn-lg ">
                    ¡Votar!
                </a>
            </div>
            <?php endif; ?>

        </div>

    </div>
</div>
</div>


<div class="section">
    <!-- Seccion para administradores -->
    <?php if(isset($_SESSION['admin'])):?>
    <div class="container">
        <div class="row">
            <div class="title-area">
                <h2>Servicios de Administrador</h2>
                <div class="separator separator-danger">✻</div>
                <p class="description">Apartado exclusivo para el administrador, encargado de llevar el manejo y contro
                    de las candidatas a reina en el cual contara con la responsabilidad de agregar, eliminar y editar si
                    asi es el caso de las estudiantes que se encuentren inscritas en el evento.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="<?=base_url?>candidata/agregarCandidata">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-add-user"></i>
                        </div>
                        <h3>Agregar Candidata</h3>
                        <p class="description">Agrega a una estudiante que deseé participar en el puesto de candidata a
                            reina.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?=base_url?>candidata/eliminarCandidata">
                    <div class="info-icon">
                        <div class="icon text-danger">

                            <i class="pe-7s-delete-user"></i>
                        </div>
                        <h3>Eliminar Candidata</h3>
                        <p class="description">Elimina a una estudiante de la cual no se requiera en el evento su
                            participacion a candidata a reina.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?=base_url?>candidata/modificarCandidata">
                    <div class="info-icon">
                        <div class="icon text-danger">
                            <i class="pe-7s-note"></i>
                        </div>
                        <h3>Editar Candidata</h3>
                        <p class="description">Si existe una candidata inscrita pero con datos erroneos, modifica su
                            informacion.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<!-- Fin opciones administrador -->

<div class="section section-our-team-freebie" id="candidatas">
    <div class="parallax filter filter-color-black">
        <div class="image" style="background-image:url('<?=base_url?>assets/img/khaleesi.jpg')">
        </div>
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="title-area">
                        <h2>Candidatas</h2>
                        <div class="separator separator-danger">✻</div>

                        <!-- Si el usuario ya voto -->
                        <?php if(isset($_SESSION['identity']) && $_SESSION['identity']->voto == 1):?>
                        <p class="description">Ya has votado por una candidata, pero aun asi puedes ver el top ranking!</p>
                        <!-- si el usuarion no ha votado -->
                        <?php elseif(isset($_SESSION['identity']) && $_SESSION['identity']->voto == 0):?>
                        <p class="description">En el siguiente apartado se encuentras las candidatas que participan para ser Reina UES, no olvides apoyar.</p>
                        <?php else :?>
                        <p class="description">Inicia secion para que en el siguiente apartado se encuentres las candidatas que participan para ser Reina UES, no olvides apoyar.</p>


                        <?php endif; ?>

                    </div>
                </div>

                <div class="team">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <?php while($can = $candidatas->fetch_object()): ?>
                                <div class="col-md-4">
                                    <div class="card card-member">
                                        <div class="content">
                                            <div class="avatar avatar-danger">
                                                <img alt="..." class="img-circle"
                                                    src="<?=base_url?>uploads/images/<?=$can->imagen?>" />
                                            </div>
                                            <div class="description">
                                                <h3 class="title"><?=$can->Nombre;?></h3>
                                                <p class="small-text"><?= Utils::formatText($can->NombreCarrera)?></p>
                                                <p class="description"><?=$can->descripcion?></p>


                                                <!-- Verifica si el usuario a iniciado sesion -->

                                                <?php if(isset($_SESSION['identity']) && $_SESSION['identity']->voto == 0):?>
                                                <form action="<?=base_url?>alumno/saveVote" onSubmit="return confirm('¿Estas seguro que deseas votar por esta candidata? (Solo puedes votar una vez)');" method="POST">
                                                    <!-- form que manda el id de la candidata y id del alumno -->
                                                    <input type="hidden" name="candidataID"
                                                        value="<?=$can->CandidataID?>">
                                                    <input type="submit" value="Votar" name="<?=$can->CandidataID?>"
                                                        class="btn btn-danger btn-fill">
                                                </form>
                                                <!-- Si no ha iniciado session desactiva el boton -->
                                                <?php elseif(!isset($_SESSION['identity']) || $_SESSION['identity']->voto == 1):?>
                                                <a href="<?=base_url?>alumno/index" class="btn btn-danger btn-fill"
                                                    disabled>Votar</a>
                                                <?php endif;?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;?>

                                <!-- Fin carta -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section section-our-clients-freebie">
    <div class="container">
        <div class="title-area">
            <h5 class="subtitle text-gray">Mira aqui el...</h5>
            <h2>TOP RANKING</h2>
            <p> El top ranking representa a las tres candidatas con el porcentaje mas alto hasta el momento, basandonos
                en la mayoria de votos obtenido por los estudiantes que apoyan a sus compañeras que se encuentran como
                candidatas a ser reina, si tu candidata favorita no se encuentra en este top no te preocupes ya que aun
                puede aparecer y darle la vuelta a este juego con el appoyo de los votantes que aun faltan por
                participar.</p>

            <div class="separator separator-danger">∎</div>
        </div>

        <ul class="nav nav-text" role="tablist">
            <?php $candidatasArray = array() ?>
            <input type="hidden" name="">
            <?php while($topCan = $topCandidatas->fetch_object()):?>
           
            <?php array_push($candidatasArray, $topCan->CandidataID) ?>
            <li>
                <a href="#testimonial<?=$topCan->CandidataID?>" role="tab" data-toggle="tab">
                    <div class="image-clients">
                        <img alt="..." class="img-circle" src="<?=base_url?>uploads/images/<?=$topCan->imagen?>" />
                    </div>
                </a>
            </li>

            <?php endwhile; ?>
        </ul>
        <?php  
                
                $candidata0 = Utils::getDescripcionById($candidatasArray[0]);
                $candidata1 = Utils::getDescripcionById($candidatasArray[1]);
                $candidata2 = Utils::getDescripcionById($candidatasArray[2]);
                ?>
                
                
      
        <div class="tab-content">
            <div class="tab-pane active" id="testimonial<?=$candidatasArray[0]?>">
                <p class="description">

                   
                   <?= $candidata0?>

                   
                
                </p>
            </div>

            <div class="tab-pane" id="testimonial<?=$candidatasArray[1]?>">
                <p class="description">
                <?= $candidata1?>
                </p>
            </div>
            <div class="tab-pane" id="testimonial<?=$candidatasArray[2]?>">
                <p class="description">
                <?= $candidata2?>
                </p>
            </div>

        </div>

    </div>
</div>


<div class="section section-small section-get-started">
    <div class="parallax filter">
        <div class="image" style="background-image: url('<?=base_url?>assets/img/queen.png')">
        </div>
        <div class="container">
            <div class="title-area">
                <h2 class="text-white">¿Quieres participar como candidata?</h2>
                <div class="separator line-separator">♦</div>
                <p class="description">Solo tienes que pertenecer a unas de las carreras asignadas por la universidad, asercate con nosotros para participar como candidata a Reina UES.</p>
            </div>

            <div class="button-get-started">
                <a href="#gaia" class="btn btn-danger btn-fill btn-lg">Contacto</a>
            </div>
        </div>
    </div>
</div>



<!--   core js files    -->
<script src="<?=base_url?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url?>assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="<?=base_url?>assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="<?=base_url?>assets/js/gaia.js"></script>

<?php
    //footer
    require_once 'views/layout/footer.php';
?>