<?php
	header('Content-type: text/html; charset=utf-8');
	require_once 'Group.php';
	require_once 'Student.php';

	$group1 = new Group(1,'И-02', 2);
	$s1 = new Student('Вова' , 'Володин', 'Владимирович', $group1);
	$s1 = new Student('Вован' , 'Володин', 'Владимирович', $group1);
	$s1 = new Student('Вовчик' , 'Володин', 'Владимирович', $group1);

	$group1->display();
 ?>