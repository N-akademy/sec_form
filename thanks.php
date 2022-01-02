<?php

if($_POST){
    $name = $_POST['user_name'];
    $firstname = $_POST['user_firstname'];
    $email = $_POST['user_email'];
    $phone = $_POST['user_phone'];
    $message = $_POST['user_message'];
    $cars = $_POST['user_cars'];
    $errors = array();
    $validate_mail = !filter_var($email, FILTER_VALIDATE_EMAIL);

    if(empty($name)){
        $errors['name'] = "Le nom est obligatoire";
    }

    if(empty($firstname)){
        $errors['firstname'] = "Le prénom est obligatoire";
    }

    if(empty($email)){
        $errors['email'] = "L'email est obligatoire";
    }elseif($validate_mail){
        $errors['email'] = "L'email n'a pas le bon format";
    }

    if(empty($phone)){
        $errors['phone'] = "Le numéro de téléphone est obligatoire";
    }

    if(empty($message)){
        $errors['message'] = "Le message est obligatoire";
    }

    if(empty($cars)){
        $errors['cars'] = "Choisissez la raison";
    }


    if(isset($errors['name'])) {
        echo $errors['name'];
    }elseif(isset($errors['firstname'])) {
        echo $errors['firstname'];
    }elseif (isset($errors['email'])) {
        echo $errors['email'];

    }elseif (isset($errors['phone'])){
        echo $errors['phone'];
    }elseif (isset($errors['message'])){
        echo $errors['message'];
    }elseif (isset($errors['cars'])){
        echo $errors['cars'];
    }else {
        echo 'Merci ' . $name .' '.$firstname . ' de nous avoir contacté à propos de ' . $cars;
        echo ' ';
        echo 'Un de nos conseiller vous contactera soit à l’adresse  ' . $email . ' ou par téléphone au ' . $phone . ' dans les plus brefs délais pour traiter votre demande :';
        echo ' ';
        echo $message;
    }

}

