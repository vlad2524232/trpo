<?php
Class ClassA {

}

Class ClassB extends ClassA {
  public function __construct($obj1) {
	$this->obj1 = $obj1;
  }
  protected $obj1;
}

Class ClassC extends ClassB {
  public function __construct($obj1, $obj2) {
	parent::__construct($obj1);
	$this->obj2 = $obj2;
  }
  protected $obj2;
}

$obj5 = new ClassA();
$obj4 = new ClassB($obj5);
$obj3 = new ClassB($obj4);
$obj2 = new ClassB($obj5);
$obj1 = new ClassC($obj2, $obj3);
?>