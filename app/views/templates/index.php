<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once '../app/views/templates/partials/_head.php'; ?>
</head>

<body class="bg-gray-800 text-white font-sans">
    <!-- Header -->
    <header class="bg-gray-900 shadow-lg relative top-8" x-data="{ open: false, loggedIn: true, userMenuOpen: false }">
        
        <?php include_once '../app/views/templates/partials/_nav.php'; ?>

        <!-- Menu pour mobile -->
        <div x-show="open" class="md:hidden p-8">
            <a class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700" href="#">Monstres</a>
            <a class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700" href="#">Ajouter un monstre</a>
            <!-- <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Se connecter</a
        >
        <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Mon Profil</a
        >
        <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Mon Deck</a
        >
        <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Ajouter un Monstre</a
        >
        <a
          class="block bg-gray-900 text-white px-4 py-2 hover:bg-gray-700"
          href="#"
          >Se Déconnecter</a
        > -->
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <?php include_once '../app/views/templates/partials/_main.php'; ?>

        <!-- Sidebar -->
        <?php include_once '../app/views/templates/partials/_aside.php'; ?>
    </div>

    <!-- Footer -->
    <?php include_once '../app/views/templates/partials/_footer.php'; ?>
</body>

</html>