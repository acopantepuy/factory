<?php

//Clase Maestra o Principal
include 'Figuras/Figuras.php';

echo '<h1>Implementación Factory Figuras Geométricas</h1></br>';

$miCirculo = Figuras::crearFigura(0,null,8);
echo '<b>Tipo: </b>'.$miCirculo->getTipo() . '</br>';
echo '<b>Diametro: </b>'.$miCirculo->getDiametro() . '</br>';
echo '<b>Superficie: </b>'.$miCirculo->getSuperficie() . '</br>';
echo '<b>Base: </b>'.$miCirculo->getBase() . '</br>';
echo '<b>Altura: </b>'.$miCirculo->getAltura() . '</br>';
echo '</br>';

$miCuadrado = Figuras::crearFigura(1,4,null);
echo '<b>Tipo: </b>'.$miCuadrado->getTipo() . '</br>';
echo '<b>Altura: </b>'.$miCuadrado->getAltura() . '</br>';
echo '<b>Base: </b>'.$miCuadrado->getBase() . '</br>';
echo '<b>Superficie: </b>'.$miCuadrado->getSuperficie() . '</br>';
echo '<b>Diametro: </b>'.$miCuadrado->getDiametro() . '</br>';
echo '</br>';

$miTriangulo = Figuras::crearFigura(2,4,5);
echo '<b>Tipo: </b>'.$miTriangulo->getTipo() . '</br>';
echo '<b>Altura: </b>'.$miTriangulo->getAltura() . '</br>';
echo '<b>Base: </b>'.$miTriangulo->getBase() . '</br>';
echo '<b>Superficie: </b>'.$miTriangulo->getSuperficie() . '</br>';
echo '<b>Diametro: </b>'.$miTriangulo->getDiametro() . '</br>';

