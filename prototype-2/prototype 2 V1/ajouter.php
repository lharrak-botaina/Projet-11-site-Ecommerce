<?php
session_start();
include 'gestionProduit.php';
$gestionProduit = new GestionProduit();

$id=$_POST['id'];
$data = $gestionProduit->afficherProduit($id);

foreach($data as $value);
$valeurs = array(
    "nom" => $value->getNom(),
    'prix' => $value->getPrix(),
    'quantite' => $_POST["quantite"] ,
    'id' => $value->getId(),
);
$gestionProduit->set( $id, $valeurs);

header("location: panier.php");


