<?php
$nom_produit = "T-shirt femme"; 
$couleur = "Rouge";
$prix = 15.50;
$disponible = true;
$quantite = 10;

require "affichage.php"; 
require "gestion-produit.php";

    afficher_produit($nom_produit, $couleur, $prix, $disponible);
$quantite = achat($quantite, 5); 
$disponible = update_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
$quantite = achat($quantite, 5); 
$disponible = update_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
$quantite = restockage($quantite, 5);
$disponible = update_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);