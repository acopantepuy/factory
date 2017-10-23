<?php
/**
 * Cuadrado
 * Esta libreria obtiene información de la figura
 * geométrica cuadrado
 * @autor: José Rafael Castro Chacín
 * @modificación: 23-10-2017
 * @version: 1.0.0 
**/
/* Interfaces */
include_once 'interfaces/figurasGeometricas.php';

/* Definición de la Clase */
class Cuadrado extends TipoFiguraGeometrica implements figurasGeometricas
{	
	/* Propiedades */
	private $altura;	
	
	/* Constructor */
	public function __construct($altura) {
		$this->altura = $altura;
	}
	
	/* Métodos */
	public function getSuperficie()
	{
		//Código
		return ($this->altura * $this->altura);
		
	}
	public function getBase()
	{
		//Código
		return $this->altura;
		
	}
	public function getAltura()
	{
		//Código
		return $this->altura;
	}
	public function getDiametro()
	{
		//Código
		return null;
		
	}
	public function getTipo()
	{
		//Código
		return "Cuadrado";
		
	}
	
}