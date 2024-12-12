<?php if (isset($_POST['submit'])) : ?>
    <?php require_once '../controllers/log-in/login.php'; ?>
    <?php $validate = login() ?>
<?php endif ?>

<div class="flex items-center justify-center min-h-screen bg-purple-600">
    <div class="bg-white p-12 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-purple-600 mb-8 text-center">Inloggen</h2>
        <form method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">E-mail</label>
                <input id="email" name="emailLogin" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Wachtwoord</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
                <?php if (isset($validate)) : ?>
                    <p class="red-text"><?= $validate ?></p>
                <?php endif ?>
            </div>
            <button type="submit" name="submit" class="w-full bg-purple-600 text-white py-2  px-4 rounded-lg hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Inloggen</button>
        </form>
        <div class="mt-4 text-center">
            <a href="?page=registreren" class="text-purple-600 hover:text-purple-800">Registreren</a>
        </div>
    </div>
</div>