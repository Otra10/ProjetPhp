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
                <img src="logo.jpg" alt="" class="h-20 w-20  rounded-full">
            </div>
            <nav class="flex-grow">
                <ul class="flex flex-col">
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="#">Accueil</a>
                    </li>
                    <li class="mb-2">
                        <?php if($_SESSION["user"]["role"]=="gestionnaire" || ($_SESSION["user"]["role"]=="responsableStock")):?>
                       
                            <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?= webRoot ?>/?controller=ArticleConfection">Articles de Confection</a>
                        <?php endif; ?>
                    </li>
                    <li class="mb-2">
                    <?php if($_SESSION["user"]["role"]=="gestionnaire" || ($_SESSION["user"]["role"]=="tailleur")):?>
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?= webRoot ?>/?controller=ArticleVente">Articles de Vente</a>
                        <?php endif; ?>
                    </li>
                    <li class="mb-2">
                    <?php if($_SESSION["user"]["role"]=="gestionnaire"):?>
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?= webRoot ?>/?controller=Categorie">Catégories</a>
                        <?php endif; ?>
                    </li>
                    <li class="mb-2">
                        <?php if($_SESSION["user"]["role"]=="gestionnaire" || ($_SESSION["user"]["role"]=="responsableStock")):?>
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?= webRoot ?>/?controller=Approvisionnement">Approvisionnement</a>
                        <?php endif; ?>
                    </li>
                    <li class="mb-2">
                        <?php if($_SESSION["user"]["role"]=="gestionnaire"):?>
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?= webRoot ?>/?controller=Fournisseur">Fournisseurs</a>
                        <?php endif; ?>
                    </li>
                    <li class="mb-2">
                        <?php if($_SESSION["user"]["role"]=="gestionnaire"):?>
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?= webRoot ?>/?controller=Client">Clients</a>
                        <?php endif; ?>
                    </li>
                    <li class="mb-2">
                        <?php if($_SESSION["user"]["role"]=="gestionnaire" || ($_SESSION["user"]["role"]=="vendeur")):?>
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?= webRoot ?>/?controller=Vente">Ventes</a>
                        <?php endif; ?>
                    </li>
                    <li class="mb-2">
                        <?php if($_SESSION["user"]["role"]=="gestionnaire"):?>
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="<?= webRoot ?>/?controller=Type">Types</a>
                        <?php endif; ?>
                    </li>
                    <li class="mb-2">
                        <?php if($_SESSION["user"]["role"]=="gestionnaire"):?>
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700" href="#">Contact</a>
                        <?php endif; ?>
                    </li>
                    <li class="mb-2">
                        <a class="nav-link block py-2 px-4 hover:bg-gray-700 " href="<?= webRoot ?>/?controller=Auth&id=logout">Deconnexion</a>
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
    </div>
</body>

</html>