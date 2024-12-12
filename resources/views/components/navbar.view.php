<nav class="bg-purple-500 sticky top-0 p-4">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
        <button id="toggleMenu" class="lg:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>   
            <div class="hidden lg:flex">
                <a href="?page=home" class="text-white hover:text-gray-200 mr-4">Home</a>
                <a href="?page=evenementen" class="text-white hover:text-gray-200 mr-4">Evenementen</a>
                <a href="?page=abonnementen" class="text-white hover:text-gray-200 mr-4">Abonnementen</a>
                <?php if (isset($_SESSION['login']) && $_SESSION['login']['is_admin'] == True) : ?>
                    <a href="?page=admin-pagina" class="text-white hover:text-gray-200">Adminpagina</a>
                <?php endif ?>
            </div>
        </div>
        <?php if (isset($_SESSION['login'])) : ?>
            <a href="?page=admin-profiel" class="text-white hover:text-gray-200"><?= $_SESSION['login']['username'] ?></a>
        <?php endif ?>
        <?php if (!isset($_SESSION['login'])) : ?>
            <a href="?page=log-in" class="text-white hover:text-gray-200">Log in</a>
        <?php endif ?>
    </div>
    
    <div id="menu" class="hidden lg:hidden">
        <a href="?page=home" class="block text-white hover:text-gray-200 py-2">Home</a>
        <a href="?page=evenementen" class="block text-white hover:text-gray-200 py-2">Evenementen</a>
        <a href="?page=abonnementen" class="block text-white hover:text-gray-200 py-2">Abonnementen</a>
        <?php if (isset($_SESSION['login']) && $_SESSION['login']['is_admin'] == True) : ?>
            <a href="?page=admin-pagina" class="block text-white hover:text-gray-200 py-2">Adminpagina</a>
        <?php endif ?>
    </div>
</nav>

<script src="../js/menu.js"></script>