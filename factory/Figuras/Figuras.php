<?php
/**
 * Crear Figura
 * Esta libreria define el factory para manejar
 * figuras geométricas
 * @autor: José Rafael Castro Chacín
 * @modificación: 23-10-2017
 * @version: 1.0.0 
**/
/* Carga automatica de clases necesarias */

function __autoload($classname) {
    $filename = "class/". $classname .".php";
    include_once($filename);
}

/*   Implementación Clase Figuras con el patrón de diseño FACTORY   */

class Figuras{
	
	/* Tipos de Figuras geometricas aceptadas por esta clase
		
		@Parámetro $tipoFigura
		
			CIRCULO   = 0
			CUADRADO  = 1
			TRIANGULO = 2
		
		@Parámetro $altura
		
			Este parámetro define para el Cuadrado la medida del LADO y para el triángulo la ALTURA

		@Parámetro $BaseDiametro
		
			Este parámetro define el DIAMETRO para el círculo y la BASE para el Triángulo		
	
	*/
	
	public static function crearFigura($tipoFigura,$altura, $BaseDiametro ){
		
		
		switch($tipoFigura) {
				
			case TipoFiguraGeometrica::CIRCULO:
				return new Circulo($BaseDiametro);
				break;
			case TipoFiguraGeometrica::CUADRADO:
				return new Cuadrado($altura);
				break;
			case TipoFiguraGeometrica::TRIANGULO:
				return new Triangulo($altura, $BaseDiametro);
				break;			
		
		}
		
	}	
}