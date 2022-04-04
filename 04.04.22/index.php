<?php
	header('Content-type: text/html; charset=utf-8');
	require_once 'cat.php';
	require_once 'dog.php';
	require_once 'toy.php';

	$toy1 = new Toy( 'Мышка' );

	$pet1 = new Cat('Вова' , 'кошка', $toy1);
	$pet2 = new Dog('Лок' , 'овчарка', new Toy( 'Мячик' ));

	$pet1->show();
	$pet1->voice();
	$pet1->game();

	$pet2->show();
	$pet2->voice();
	$pet2->game();
 ?>