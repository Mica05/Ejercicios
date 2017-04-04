<?php
			include "persona.PHP";

			class Empleado extends Persona
			{
				private $_legajo;
				private $_sueldoBruto;
				private $_sueldoNeto;

				function __construct($name,$year,$leg,$sb)
				{
					parent::__construct($name,$year);
					$this->_legajo = $leg;
					$this->_sueldoBruto = $sb;
				}

				public function getLegajo() {  
			     	return $this->_legajo;  
			   	}  

			   	public function getSueldoBruto() {  
			     	return $this->_sueldoBruto;  
			   	}  

			   	public function setSueldoNeto($sdbrt) {  
			     	$this->_sueldoNeto = $sdbrt * 0.80;  
			   	}  

	   			public function getSueldoNeto() {  
			     	return $this->_sueldoNeto;  
			   	}  

				static function CalcularSueldoNeto($obrero)
				{
					$obrero->setSueldoNeto($obrero->getSueldoBruto());
				}
				
				public function Hablar($idioma)
				{
					parent::SetIdioma($idioma);
				}

				public function ToString()
				{
					return parent::ToString() . "Legajo: " . $this->getLegajo() . "<br>".
					"Sueldo Bruto: " . $this->getSueldoBruto() . "<br>".
					"Sueldo Neto: " . $this->getSueldoNeto() ." <br>";
				}
			}
		?>