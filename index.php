<?php
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "core/EquationInterface.php";
include "vlad/Log.php";
include "vlad/Linear.php";
include "vlad/Square.php";

use vlad\Log;
use vlad\Square;
use vlad\Linear;
use vlad\MyException;


echo "Enter koefs a, b, c \n";

for($i = 0; $i < 3; $i ++) {
	fscanf(STDIN, "%d\n", $number);
	$kfArray[$i] =  $number;
}

$a = $kfArray[0];
$b = $kfArray[1];
$c = $kfArray[2];

$eq = $a . "x^2 + " . $b . "x + " . $c . " = 0";
Log::log("Entered equation: " . $eq);

$equation = new Square();
	$roots = $equation->solve($a, $b, $c);
	
	if(count($roots) == 2) {
		Log::log("This equation has 2 roots: " . $roots[0] . ", " . $roots[1] . "\n");
	} elseif(count($roots) == 1) {
		Log::log("Equation root " . $roots[0] . "\n");
	}
	
Log::write();
?>
