<?php
namespace vlad;

use core;

// Линейное уравнение kx + b = 0
Class Linear {
  // решение уравнения(ответ)
  protected $x = [];

  public function __construct() {
  }

  public function linearSolve($k, $b) {
	
	
    Log::log("Linear equation is entered");
  	$this->x[] = round(($b * -1)/$k, 3);

	return $this->x;
  }
}
?>
