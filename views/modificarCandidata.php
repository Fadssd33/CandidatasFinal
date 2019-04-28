<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbarRosa.php';
?>
<br><br>
<div class="section section-our-clients-freebie">
    <div class="container">
        <div class="title-area">
            <h5 class="subtitle text-gray">Modificar</h5>
            <h2>Candidatas</h2>
            <div class="separator separator-danger">∎</div>
            <?php if(isset($_SESSION['candidataModificada']) && $_SESSION['candidataModificada'] == "complete"):?>
            <!-- Cambiar esto a verde -->
            <p class="description">
                Candidata modificada correctamente.
            </p> <br>
            <?php elseif(isset($_SESSION['candidataModificada']) && $_SESSION['candidataModificada'] != "complete"):?>
            <!-- Cambiar esto a rojo -->

            <p class="description">
                ERROR: La candidata no ha podido ser modificada.
            </p> <br>
            <?php endif;?>
            <?= Utils::deleteSession('candidataModificada');?>
        </div>




        <ul class="nav nav-text" role="tablist">
            <li class="active">
                <a href="#testimonial1" role="tab" data-toggle="tab">
                    <!-- Saca todas las candidatas       -->
                    <?php while($can = $candidatas->fetch_object()):?>
                    <div class="col-md-4">
                        <div class="card card-member">
                            <div class="content">
                                <div class="imagen-alinear">
                                    <div class="avatar avatar-danger">
                                        <img alt="..." class="img-circle "
                                            src="<?=base_url?>uploads/images/<?=$can->imagen?>" />
                                    </div>
                                </div>
                                <div class="description">
                                    <form action="<?=base_url?>candidata/modificarCandidata2"
                                        onSubmit="return confirm('¿Realmente deseas guardar los cambios?');"
                                        method="POST" enctype="multipart/form-data">

                                        <input type="file" class="form-control-file formCarrera" name="imagen"
                                            value="<?=$can->imagen?>">


                                        <input class="title formCarrera" type="text" name="nombre" value="<?=$can->Nombre?>">
                                        <input class="title formCarrera" type="text" name="apellidoMaterno" id=""
                                            value="<?=$can->ApellidoMaterno?>">
                                        <input class="title formCarrera" type="text" name="apellidoPaterno" id=""
                                            value="<?=$can->ApellidoPaterno?>">
                                        <input class="title formCarrera" type="text" name="correo" id="" value="<?=$can->Correo?>">
                                        <!-- Mostrar la carrera -->

                                        <?php $carreras = Utils::showCarreras();?>
                                        <select class="small-text formCarrera" name="carreraID">
                                            <option value="<?=$can->CarreraID?>" selected>
                                                <?=$can->NombreCarrera?>

                                            </option>
                                            <?php while($carrera = $carreras->fetch_object()): ?>
                                            <option value="<?=$carrera->CarreraID?>">
                                                <?=$carrera->NombreCarrera?>

                                            </option>



                                            <?php endwhile;?>


                                        </select><br>

                                        <input type="number" name="edad" id="edad" class="formCarrera" value="<?=$can->Edad?>">


                                        <textarea class="formCarrera"name="descripcion" id="" cols="23" rows="5"
                                            maxlength="300"><?=$can->descripcion?></textarea>



                                        <!-- pasa el id de la candidata -->
                                        <input type="text" value="<?=$can->CandidataID?>" name="candidataID"
                                            style="display:none;">

                                        <input type="submit" value="Guardar Cambios" name="candidata"
                                            class="btn btn-black btn-fill">
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
    </div>
    </a>
    </li>
    </ul>
    <?php
    //footer
    require_once 'views/layout/footer.php'
?>