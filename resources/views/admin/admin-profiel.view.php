<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: ?page=log-in');
    exit();
}
?>

<div class="flex items-center justify-center min-h-screen bg-purple-600">
    <div class="bg-white p-12 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-purple-600 mb-8 text-center">Profiel</h2>
        <form method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Naam</label>
                <div class="flex items-center justify-between">
                    <p class="mr-2"><?= $_SESSION['login']['username'] ?></p>
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">E-mail</label>
                <div class="flex items-center justify-between">
                    <p class="mr-2"><?= $_SESSION['login']['email'] ?></p>
                </div>
            </div>
            <div class="mb-4">
                <label for="subscription" class="block text-gray-700">Abonnement</label>
                <div class="flex items-center justify-between">
                    <p class="mr-2"><?= $_SESSION['login']['abonnement_soort'] ?></p>
                </div>
            </div>
            <div class="mb-6">
                <div class="flex items-center justify-between">
                    <button type="submit" name="logout" class="bg-red-600 text-white py-1 px-2 rounded-lg hover:bg-red-700 focus:outline-none focus:bg-red-700">Log uit</button>
                    <a href="?page=admin-newpassword&id=<?= $_SESSION['login']['id'] ?>" class="bg-purple-600 text-white py-1 px-2 rounded-lg hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Wijzig wachtwoord</a>
                    <a href="?page=admin-wijzigpagina&id=<?= $_SESSION['login']['id'] ?>" class="bg-purple-600 text-white py-1 px-2 rounded-lg hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Wijzig gegevens</a>
                </div>
            </div>
        </form>
    </div>
</div>