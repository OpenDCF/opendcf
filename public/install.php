<?php


// On réalise les tests de base afin d'assurer le fonctionnement de laravel
//
// Est ce que les dossiers laravel sont accessible en écriture
$directoryWrite[] = "../storage/";
$directoryWrite[] = "../storage/app/";
$directoryWrite[] = "../storage/framework/";
$directoryWrite[] = "../storage/framework/cache/";
$directoryWrite[] = "../storage/framework/sessions/";
$directoryWrite[] = "../storage/framework/views/";
$directoryWrite[] = "../bootstrap/cache/";

//si une erreur ets détecté le tabelau $msgErreur se remplira
$msgErreur = array();

foreach ($directoryWrite as $directory)
if (is_writable(dirname(__FILE__) . "/$directory") === false)
{
    $msgErreur[]="Le dossier '$directory' doit etre accessible en écriture.";
}

//On affiche les erreurs
if (count ($msgErreur) !== 0) {
    foreach ($msgErreur as $erreur) {
        echo $erreur . 'sdefsdf<br/>';

    }

    //on s'arrete là car laravel ne fonctionnera pas
    exit;

}

//on peut commencer ici sereinement l'installation de laravel
