<?php

    //Initialisation des variables
    $message ="";
    $errors =[];
    $nom = $_POST["nom"];
    $mail = $_POST["mail"];
    $nombrePersonnes = $_POST["nombrePersonnes"];
    $dateReservation = $_POST["dateReservation"];
    $regexNom ="/^[A-Z][a-zÀ-ÿ]{1,20}(-[A-Z][a-zÀ-ÿ]{1,20})?$/";
    $regexMail = "/^[a-zA-Z0-9À-ÿ]{1,20}@[a-zA-Z]{1,20}\.[a-z]{1,3}$/";
    $regexNombrePersonnes = "/^(?:[1-9]|1[0-9]|20)$/";

    if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        if (!preg_match($regexNom, $nom))
        {
            $errors["nom"] = "<h5>Attention : Le nom ne correspond pas au format attendu</h5>";
        }

        if (!preg_match($regexMail, $mail))
        {
            $errors["mail"] = "<h5>Attention : Le mail ne correspond pas au format attendu</h5>";
        }

        if (!preg_match($regexNombrePersonnes, $nombrePersonnes))
        {
            $errors["nombrePersonnes"] = "<h5>Attention : Le nombre de personnes ne peut pas dépasser 20</h5>";
        }

        // <= strtotime pour que la date soit postérieure à aujourd'hui

        if (strtotime($dateReservation) <= strtotime("today")) {
            $errors["dateReservation"] = "<h5>Attention : La date doit être postérieure à aujourd'hui.</h5>";
        }
        $dateFormatee = date("d-m-Y", strtotime($dateReservation));


        if (empty($errors)) {
            $message .= "<h1 id='messageConfirmation'> Vous avez bien réservé au nom de ".htmlspecialchars($nom)." pour le ".htmlspecialchars($dateFormatee)."</h1>";
            require "../VIEW/header.php";
            require "../VIEW/confirmationReservation.php";
            require "../VIEW/footer.php";
            $title = "Confirmation de la Réservation";
        }
        else {
            require "../VIEW/header.php";
            require "../VIEW/reservation.php";
            require "../VIEW/footer.php";
            $title = "Erreur Réservation";
        }
    }