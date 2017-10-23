<?php
/**
 * Triángulo
 * Esta libreria obtiene información de la figura
 * geométrica triángulo
 * @autor: José Rafael Castro Chacín
 * @modificación: 23-10-2017
 * @version: 1.0.0 
**/
/* Interfaces */
include_once 'interfaces/figurasGeometricas.php';

/* Definición de la Clase */
class Triangulo extends TipoFiguraGeometrica implements figurasGeometricas 
{
	/* Propiedades */
	private $altura;
	private	$base;
	
	/* Constructor */
	public function __construct($altura, $BaseDiametro) {
		$this->altura  = $altura;
		$this->base   = $BaseDiametro;
	}	
	
	/* Métodos */
	public function getSuperficie()
	{
		//Código
		return (($this->base * $this->altura)/2);
		
	}
	public function getBase()
	{
		//Código
		return $this->base;
		
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
		return 'Triángulo';
	}
	
}