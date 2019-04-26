<?php 
    class EstadisticasController {
        public function index() {
            require_once 'models/candidatas.php';
            $candidatas = new Candidata();
            $candidatasStats = $candidatas->getCandidatas();
            require_once 'views/estadisticas.php';
            
        }
    }

?>