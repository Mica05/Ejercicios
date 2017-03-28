<?php
class rectangulo extends FiguraGeometrica
{
public $_altura;
public $_base;

public function _construct($b, $h)
{
    $this->_altura= $h;
    $this->_base=$b;
}
protected function CalcularDatos()
{
  for ($b=1;$b<=$_altura;$b++) 
   {for ($a=1;$a<=$_base;$a++) 
   {
       echo '*';} 
    echo '<br>'; 
   } 

}

public function Dibujar()
{
return $_color

}
public function ToString()
{}
}
?>
