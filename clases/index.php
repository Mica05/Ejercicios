<html>
	<head>
		<title> Prueba Objetos </title>
	</head>
	<body>
		<?php
			include "empleado.php";
			include "fabrica.PHP";

			$p1 = new Empleado("Ana Alfaro",12,1,151);
			$p2 = new Empleado("Matias Iniguez",15,2,850);
			$p3 = new Empleado("Carolina Conde",18,3,954);
			
			$p1->Hablar("Ingles");
			$p2->Hablar("Frances");
			$p3->Hablar("Latino");
               
			$f1 = new Fabrica("Comunicaciones S.A");
            
			$f1->Empleados = array ($p1,$p2,$p3);
			$f1->guardarFabrica();
   //var_dump($f1);
			foreach ($f1->Empleados as $item)
			{
				$item->CalcularSueldoNeto($item);
				
			}

			echo($f1->ToString());


		?>
	</body>
</html>