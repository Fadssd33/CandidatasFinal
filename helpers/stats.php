<?php
    class Stats {
        public function getPorcentajeVotos() {
            require_once 'models/alumnos.php';
            $alumno = new Alumno();
            //Saca el numero de alumnos
            $numAlumnos = mysqli_num_rows($alumno->getAll());
            //Saca el numero de alumnos que han votado
            $numAlumnosVotados = mysqli_num_rows($alumno->getWhoVoted());
            
            //Si numAlumnos =100% entonces $numAlumnosVotados es:
            $porcentaje = ($numAlumnosVotados * 100) / $numAlumnos;
            return $porcentaje;

        }
    }
?>