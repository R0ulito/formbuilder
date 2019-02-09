<?php 

use Roulito\Formbuilder\Form as Form;
use Roulito\Formbuilder\Input as Input;
use Roulito\Formbuilder\Label as Label;

require '../vendor/autoload.php';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BootstrapDemo - Formbuilder</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-md-6 col-md-offset-3">

        <?php

        $form = new Form("GET", "http://localhost/formbuilder/bootstrap_demo");
        $nom = new Input([
            "type" => 'text',
            "name" => 'lastname',
            "classes" => [
                    "input" => 'form-control',
                    "wrapper" => 'form-group'
            ],
            "label" => [
                "name" => 'lastname',
                "text" => 'Nom: '
            ]
        ]);
        $form->addElement($nom);
        $prenom = new Input([
            "type" => 'text',
            "name" => 'firstname',
            "classes" => [
                "input" => 'form-control',
                "wrapper" => 'form-group'
            ],
            "label" => [
                "name" => 'firstname',
                "text" => 'Prénom: '
            ]
        ]);
        $form->addElement($prenom);
        $password = new Input([
            "type" => 'password',
            "name" => 'password',
            "classes" => [
                "input" => 'form-control',
                "wrapper" => 'form-group'
            ],
        ], new Label([
            "name" => 'password',
            "text" => 'Mot de passe: '
        ]));

        $form->addElement($password);



        $form->build("bootstrap");

//        $form->open();
//
//        echo $nom;
//        echo $prenom;
//        echo $password;
//
//
//        $form->close();
        ?>
    </div>


</div>



</body>
</html>
