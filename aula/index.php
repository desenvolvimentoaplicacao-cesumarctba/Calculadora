<?php

spl_autoload_register(function($class){
	require $class.'.php';
});

$soma = new Somar();
$subtracao = new Diminuir();
$multipli = new Multiplicar();
$dividir = new Dividir();

$soma->soma(5121 , 50);
$subtracao->diminuir(70 , 70);
$multipli->multiplicar(5, 5);
$dividir->dividir(10 , 2);

print_r($soma);
echo "<br><br>";

print_r($subtracao);
echo "<br><br>";
print_r($multipli);
echo "<br><br>";
print_r($dividir);

