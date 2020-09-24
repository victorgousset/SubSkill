<?php

$nom = $_POST['nom'];

if (isset($_POST['one']) && isset($_POST['two']) && isset($_POST['three']) && isset($_POST['four']) && isset($_POST['nom'])
    && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['email']))
{
    $message =  '-Espace personnel www.fongecif-idf.fr: ' . $_POST['one'] . "\n" .
                '-Contrat actuel: ' . $_POST['two'] . "\n" .
                '-Projet a ' . $_POST['three'] . 'terme' . "\n" .
                'Heure pour appel telephonique: ' . $_POST['four'] . 'h' . "\n" .
                'Nom: ' . $_POST['nom'] . ', Prenom: ' . $_POST['prenom'] . ', Tel: ' . $_POST['tel'] . ', Email: ' . $_POST['email'];

                mail($_POST['email'],"Contact - www.fongecif-idf.fr", $message);

                echo "Le formulaire est complet, vous allez recevoir un mail de confirmation";

} else {
    echo "Tous les champs ne sont pas remplis";
}