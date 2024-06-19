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
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="min-h-screen flex flex-col lg:flex-row">
        <!-- Sidebar -->
        <div class="w-full lg:w-1/4 xl:w-1/5 bg-gray-800 text-gray-100">
            <div class="p-4 text-center">
                <p class="text-white text-xl font-semibold">Logo de l'entreprise</p>
            </div>
            <nav class="flex-grow">
                <ul class="flex flex-col">
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="#">Accueil</a>
                    </li>
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?=webRoot?>/?controller=ArticleConfection">Articles de Confection</a>
                    </li>
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?=webRoot?>/?controller=ArticleVente">Articles de Vente</a>
                    </li>
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?=webRoot?>/?controller=Categorie">Catégories</a>
                    </li>
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?=webRoot?>/?controller=Approvisionnement">Approvisionnement</a>
                    </li>
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?=webRoot?>/?controller=Fournisseur">Fournisseurs</a>
                    </li>
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?=webRoot?>/?controller=Client">Clients</a>
                    </li>
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?=webRoot?>/?controller=Vente">Ventes</a>
                    </li>
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?=webRoot?>/?controller=Type">Types</a>
                    </li>
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <div class="w-full lg:w-3/4 xl:w-4/5 p-6">
            <div class="bg-white shadow-md rounded p-4">
                <?php echo $contentView; ?>
            </div>
        </div>
    </div>
</body>
</html>
