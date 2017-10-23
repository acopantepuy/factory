<?php
/**
 * Tipos Figuras
 * Definición de los métodos que deben ser implementados 
 * de forma obligatoria por la clase que hereda
 * @autor: José Rafael Castro Chacín
 * @modificación: 23-10-2017
 * @version: 1.0.0 
**/
/* Definición de la Interface */
interface figurasGeometricas 
{
	/* Plantilla Métodos */
	public function getSuperficie();
	public function getBase();
	public function getAltura();
	public function getDiametro();
	public function getTipo();
}