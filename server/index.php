<?php

$nom = $_POST['nom'];

if (htmlspecialchars(isset($_POST['one'])) && htmlspecialchars(isset($_POST['two']))
    && htmlspecialchars(isset($_POST['three'])) && htmlspecialchars(isset($_POST['four']))
    && htmlspecialchars(isset($_POST['nom'])) && htmlspecialchars(isset($_POST['prenom']))
    && htmlspecialchars(isset($_POST['tel'])) && htmlspecialchars(isset($_POST['email'])))
{
    $message =  '-Espace personnel www.fongecif-idf.fr: ' . $_POST['one'] . "\n" .
                '-Contrat actuel: ' . $_POST['two'] . "\n" .
                '-Projet a ' . $_POST['three'] . 'terme' . "\n" .
                'Heure pour appel telephonique: ' . $_POST['four'] . 'h' . "\n" .
                'Nom: ' . $_POST['nom'] . ', Prenom: ' . $_POST['prenom'] .
                ', Tel: ' . $_POST['tel'] . ', Email: ' . $_POST['email'];

                mail($_POST['email'],"Contact - www.fongecif-idf.fr", $message);

                echo "Le formulaire est complet, vous allez recevoir un mail de confirmation";

} else {
    echo "Tous les champs ne sont pas remplis";
}