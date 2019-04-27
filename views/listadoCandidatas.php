<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbar.php';
?>


<!-- contenido principal -->
<div class="section section-our-team-freebie" id="candidatas">
    <div class="parallax filter filter-color-black">
        <div class="image" style="background-image:url('<?=base_url?>assets/img/header-2.jpeg')">
        </div>
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="title-area">
                        <h2>Candidatas</h2>
                        <div class="separator separator-danger">✻</div>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, ab non?
                            Distinctio exercitationem quaerat obcaecati officia voluptates, sed temporibus et commodi
                            corrupti molestias unde, accusantium adipisci recusandae doloremque dolor quis.</p>
                    </div>
                </div>

                <div class="team">

                    <div class="row">
                    
                        <div class="col-md-10 col-md-offset-1">
                       
                            <div class="row">
                                <!-- //Inicio for o Foreach candidata-->
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
                                                <!-- Mostrar la carrera -->
                                                <p class="small-text"><?=Utils::formatText($can->NombreCarrera);?></p>
                                                <p class="description"><?=$can->descripcion?></p>
                                                <?php if(isset($_SESSION['identity']) && $_SESSION['identity']->voto == 0):?>
                                                <form action="<?=base_url?>alumno/saveVote"
                                                    onSubmit="return confirm('Estas seguro que deseas votar por esta candiadta? (Solo puedes votar una vez)');"
                                                    method="POST">
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
                                <!-- Fin FOR -->

                                <?php endwhile;?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- //Nuevo div -->
        </div>
    </div>
</div>
<!-- fin nuevos div -->
<?php
           
    //footer
    require_once 'views/layout/footer.php'
?>