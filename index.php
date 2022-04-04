<?php
	header('Content-type: text/html; charset=utf-8');
	require_once 'Human.php';
	require_once 'Student.php';

	$group = new Student('И-02');

	$human = new Human('Вова' , 'Володин', 'Владимирович', $group);

	$human->show();
	$human->group();

 ?>