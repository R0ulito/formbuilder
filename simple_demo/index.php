<?php

use Roulito\Formbuilder\Form as Form;
use Roulito\Formbuilder\Input as Input;
use Roulito\Formbuilder\Label as Label;

require '../vendor/autoload.php';



$form = new Form("POST", "http://julienjovy.free.fr");





$form->open();

echo $prenom = new Input('',[
	"type" => "text",
	"name" => "surname",
	"classes" => "form-control",
	"label" => [
		"text" => "Prénom: ",
		"classes" => "label",
		"name" => "surname"
	]
]);

$nomLabel = new Label([
	"text" => "Nom: ",
	"classes" => "supaclass",
	"name" => "name",
	"isWrapped" => true
]);



echo $nom = new Input('',[
	"type" => "text",
	"name" => "name",
	"classes" => "form-control"
], $nomLabel);


$form->build([$prenom, $nom]);


?>




