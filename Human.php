<?php 
class Human {
	private $name;
	private $surname;
	private $batya;
	private $group;

	public function __construct($n, $s, $p, $g) {
		$this->name = $n;
		$this->surname = $s;
		$this->batya = $p;
		$this->group = $g;
	}

	public function show() {
		echo sprintf('Привет, я %s %s %s <br>', $this->surname,$this->name,$this->batya);
	}

	public function group() {
		echo 'Я в группе ';
		$this->group->display();
	}
}
?>