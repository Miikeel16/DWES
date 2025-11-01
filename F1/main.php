<?php
require_once('FAcademy.php');
require_once('F4.php');
require_once('F3.php');
require_once('F2.php');
require_once('F1.php');

$academy = new FAcademy("Piloto Academy", "España", 1, "Academy Team", 0, 500);
$f4 = new F4("Piloto F4", "Francia", 2, "F4 Team", 0, "Francia");
$f3 = new F3("Piloto F3", "Italia", 3, "F3 Team", 0, "Academia XYZ");
$f2 = new F2("Piloto F2", "Alemania", 4, "F2 Team", 0, 50);
$f1 = new F1("Fernando Alonso", "España", 14, "Aston Martin", 0, "Aramco");

$academy->otorgarPuntos(1, FALSE);
$f4->otorgarPuntos(2, TRUE);
$f3->otorgarPuntos(3, FALSE);
$f2->otorgarPuntos(4, FALSE);
$f1->otorgarPuntos(5, TRUE);

echo $academy->nombre . " - Puntos: " . $academy->puntos . "\n";
echo $f4->nombre . " - Puntos: " . $f4->puntos . "\n";
echo $f3->nombre . " - Puntos: " . $f3->puntos . "\n";
echo $f2->nombre . " - Puntos: " . $f2->puntos . "\n";
echo $f1->nombre . " - Puntos: " . $f1->puntos . "\n";
?>
