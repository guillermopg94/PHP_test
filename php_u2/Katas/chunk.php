<!-- 
Crear un array no asociativo de tres dimensiones que se va a llamar Mundo. 
Donde cada dimension va a tener 16 valores. 
En cada posicion de ese array vamos a grabar un array asociativo. 
Ese array asociativo va a atener las siguientes claves y valores: 
Clave Material = Tierra
Clave Herramienta = Pala
Clave Brillo = 0
Hacer una función llamada $herramienta = devuelveHerramienta($Mundo, 3, 4, 7); (4 parametros(El array Mundo y las tres coordenadas))
que pasando como parametros el Mundo 
y tres cordenadas nos tiene que devolver 
la herramienta necesaria para picarlo.
 -->
<?php

$Mundo = array();

for ($i = 0; $i < 17; $i++) {
  array_push($Mundo, array());
}
for ($i = 0; $i < 17; $i++) {
  array_push($Mundo[$i], array("Material" => "Tierra",  "Herramienta" => "Pala",  "Brillo" => 0));
}
function devuelveHerramienta($mundo, $num1, $num2, $clave){
  echo $mundo[$num1][$num2][$clave];
}
$Mundo[14][0] = array("Material" => "Tierra",  "Herramienta" => "Pico",  "Brillo" => 0);

devuelveHerramienta($Mundo, 14, 0, "Herramienta");
