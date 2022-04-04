<?php 
require_once 'Human.php';
class Student extends Human {
	private $group;

	public function __construct($g) {
		$this->group = $g;
	}

	public function display() {
		echo $this->group;
	}
}
 ?>