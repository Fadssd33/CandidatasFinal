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

        function getPorcentajeVotosCandidata($ID) {
            require_once 'models/candidatas.php';
            $candidata = new Candidata();
            $alumno = new Alumno();

            //saca el numero de candidatas
            $numCandidatas = mysqli_num_rows($candidata->getCandidatas());
            //Sacara el numero de votos
            $votosTotales = $candidata->getNumVotos()->fetch_object()->suma;
            
            //saca el numero de votos de la candidata
            $votos = $candidata->getVotes($ID);
            $votosObjeto = $votos->fetch_object();
        
            $numVotos = $votosObjeto->numVotos;

            $porcentaje = ($numVotos * 100) / $votosTotales;
            
            
            return round($porcentaje);

        }
    }
?>