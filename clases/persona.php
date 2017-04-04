<?php
		abstract class Persona 
		{
			private $_nombreApellido;
			private $_edad;
			private $_idioma;

			function __construct($name,$year)
			{
				$this->_nombreApellido = $name;
				$this->_edad = $year;
			}

			public function getIdioma() {  
		     	return $this->_idioma;  
		   	}  

			public function SetIdioma($value) {  
		     	$this->_idioma = $value	;  
		   	}  

		   	public function getNombreApellido() {  
		     	return $this->_nombreApellido;  
		   	}  

		   	public function getEdad() {  
		     	return $this->_edad;  
		   	}  

			abstract public function Hablar($idioma);

			public function ToString()
			{
				return "Nombre: ". $this->getNombreApellido() . "<br>" . "Edad: " . $this->getEdad() ."<br>".
				 "Idioma: " . $this->getIdioma() . "<br>" ;
			}
		}
	?>
