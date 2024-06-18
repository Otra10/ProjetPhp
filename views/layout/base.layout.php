<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Votre Application</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <style>
        .nav-link:hover {
            color: #ddd !important;
            text-decoration: underline !important;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row">
            <div class="w-full lg:w-1/4 xl:w-1/5 bg-gray-800 p-4">
                <div class="text-center mb-4">
                    <p class="text-white">Logo de l'entreprise</p>
                </div>
                <ul class="nav flex-col min-h-screen">
                    <li class="nav-item mb-2">
                        <a class="nav-link text-white block py-2 px-4 hover:bg-gray-700" href="#">Accueil</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-white block py-2 px-4 hover:bg-gray-700" href="<?=webRoot?>/?controller=article&action=listeArticle">Articles</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-white block py-2 px-4 hover:bg-gray-700" href="<?=webRoot?>/?controller=categorie&action=listeCategorie">Catégories</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-white block py-2 px-4 hover:bg-gray-700" href="<?=webRoot?>/?controller=type&action=listeType">Types</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-white block py-2 px-4 hover:bg-gray-700" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="w-full lg:w-3/4 xl:w-4/5 mt-5 lg:mt-0 lg:ml-4">
                <div>
                    <?php echo $contentView; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>