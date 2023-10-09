<?php

    							     

					if(isset($_POST["submit"])){
					if(isset($_POST["voterName"]) && isset($_POST["voterEmail"]) && isset($_POST["voterID"]) && isset($_POST["selectedCandidate"]))
					{
						$Nombre= $_POST["voterName"];
						$email= $_POST["voterEmail"];
						$votadorID= $_POST["voterID"];
						$seleccion= $_POST["selectedCandidate"];
					}
				}
				else
				{
					echo "<br>All Field Recquired";
				}
				
       $DB_HOST= "localhost";
       $DB_USER="root";
       $DB_PASSWORD="";
       $DB_NAME="Mi_voto";
	
	    $consulta= "insert into votantes values('$Nombre', '$email','$votadorID', $seleccion)";		
		$conexion= @mysqli_connect("localhost","root","","mi_voto");
        $resultado= mysqli_query($conexion, $consulta);
				

					

				if($resultado){
					echo "<img src='images/success.png' width='70' height='70'>";
					echo "<h3 class='text-info specialHead text-center'><strong> Has votado satisfactoriamente.</strong></h3>";
					echo "<a href='index.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finalizar</strong> </a>";
				}
				else
				{
					echo "<img src='images/error.png' width='70' height='70'>";
					echo "<h3 class='text-info specialHead text-center'><strong> Parece que tenemos un problema.</strong></h3>";
					echo "<a href='index.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finalizar</strong> </a>";
				}

				
				?>