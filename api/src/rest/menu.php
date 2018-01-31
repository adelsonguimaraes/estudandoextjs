<?php

/*
 	Projeto: SGAF.
 	Project Owner: Giovanni Russo.
 	Gerente de Desenvolvimento: Nilton Caldas Jr.
 	Desenvolverdor: Fabiano Ferreira da Silva Costa.
 	Desenvolverdor: Adelson Guimar�es Monteiro.
 	Data de in�cio: 07/03/2016.
 	Data Atual: 10/03/2016.
*/

/* Inclui a Class de autoLoad */
require_once 'autoload.php';

/* Metodo requisitado */
switch ($_SERVER['REQUEST_METHOD']) {
	case 'GET':
		listar();
		break;
	case 'atualizar':
		atualizar();
		break;
	case 'listar':
		listar();
		break;
	case 'deletar':
		deletar();
		break;
	case 'buscarPorId':
		buscarPorId();
		break;
}

/* Metodos */
function cadastrar () {
	
}
function atualizar () {
	
}
function listar () {
	
}
function deletar () {
	
}
function buscarPorId () {
	
}
?>