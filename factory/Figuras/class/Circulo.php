<?php
/**
 * Círculos
 * Esta libreria obtiene información de la figura
 * geométrica círculo
 * @autor: José Rafael Castro Chacín
 * @modificación: 23-10-2017
 * @version: 1.0.0 
**/
/* Interfaces */
include_once 'interfaces/figurasGeometricas.php';

/* Definición de la Clase */
class Circulo extends TipoFiguraGeometrica implements figurasGeometricas 
{
	/* Propiedades */
	private $diametro;	
	
	/* Constructor */
	public function __construct($BaseDiametro) {
		$this->diametro = $BaseDiametro;
	}
	
	/* Métodos */
	public function getSuperficie()
	{
		//Código
		return (pow(($this->diametro/2),2) * pi());
	}
	public function getBase()
	{
		//Código
		return null;
	}
	public function getAltura()
	{
		//Código
		return null;
	}
	public function getDiametro()
	{
		//Código
		return $this->diametro;
		
	}
	public function getTipo()
	{
		//Código
		return 'Círculo';
		
	}
	
}