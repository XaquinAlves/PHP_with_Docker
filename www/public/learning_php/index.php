<?php
$variable = "ola";
echo "asi non recoñece o retroceso de carro";
echo $variable;
echo "\n";
echo $variable;

?>
//Solucion
<h1> <?php echo $variable . "\n" ?></h1>
<h1> <?= $variable?> </h1>
