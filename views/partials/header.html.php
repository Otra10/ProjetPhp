<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Bootstrap</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link:hover {
            color: #ddd !important; /* Changer la couleur au survol */
            text-decoration: underline !important; /* Souligner le texte au survol */
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row back">
        <div class="col-md-3 col-lg-2 bg-dark p-4">
            <div class="text-center mb-4">
                <p style="color: white;">Logo de l'entreprise</p>
            </div>
            <ul class="nav flex-column min-vh-100">
                <li class="nav-item">
                    <a class="nav-link   text-white" href="#" >Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="<?=webRoot?>/?controller=article&action=listeArticle">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="<?=webRoot?>/?controller=categorie&action=listeCategorie">Catégories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="<?=webRoot?>/?controller=type&action=listeType">Types</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="#">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Contenu principal à droite -->
        <div class="col-md-9 col-lg-10 mt-5">
            
            <div>