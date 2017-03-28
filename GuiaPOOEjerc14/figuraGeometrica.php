<?php
abstract class FiguraGeometrica
{
protected  $_color;
protected  $_perimetro;
protected  $_superficie;

public  function _construct()
{}

abstract protected function  CalcularDatos();
 
abstract public function Dibujar();

 public function GetColor()
{
 return $_color;
}

public function SetColor($color)
{
 $this->_color = $color; 

}

public function ToString()
{}


}
?>