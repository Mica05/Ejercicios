<?php
			// include "claseEmpleado.PHP";

			class Fabrica
			{
				public $RazonSocial;
				public $Empleados;

				function __construct($razon)
				{
					$this->RazonSocial = $razon;
				
				}
           public function guardarFabrica()
		   {
			   $_archivo= fopen("fabrica.txt", "a" ); // creo archivo
			     
			 foreach ($this->Empleados as $key) {
				     var_dump($key);
					fwrite($_archivo, $key->ToString(). "\r\n" );
					fclose($archivo);
			   }				
			

		   }
				function ToString()
				{
					$aux;

					$aux =  "Razon Social: " . $this->RazonSocial . "<br>";
					
					foreach ($this->Empleados as $item) {
						
						$aux = $aux . "Empleado:<br> ".$item->ToString() . "<br>";
					}

					return $aux;
				}
			}
		?>