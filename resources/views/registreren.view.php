<?php if (isset($_POST['registreren'])) : ?>
    <?php require_once '../controllers/log-in/registreren.php'; ?>
    <?php $validate = register() ?>
<?php endif ?>

<div class="flex items-center justify-center min-h-screen bg-purple-600">
    <div class="bg-white p-12 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-purple-600 mb-8 text-center">Registreren</h2>
        <form method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">E-mail</label>
                <input type="email" id="email" name="registeremail" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
                <?php if (isset($_POST['registreren']) && empty($_POST['registeremail'])) : ?>
                    <p class="red-text">Voer email in</p>
                <?php endif ?>
                <?php if (isset($validate)) : ?>
                    <p class="red-text">Deze email bestaat al</p>
                <?php endif ?>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Wachtwoord</label>
                <input type="password" id="password" name="registerwachtwoord" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
                <?php if (isset($_POST['registreren']) && empty($_POST['registerwachtwoord'])) : ?>
                    <p class="red-text">Voer wachtwoord in</p>
                <?php endif ?>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Naam</label>
                <input type="text" id="password" name="registerusername" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
                <?php if (isset($_POST['registreren']) && empty($_POST['registerusername'])) : ?>
                    <p class="red-text">Voer username in</p>
                <?php endif ?>
            </div>
            <div class="mb-6">
                <label for="subscription" class="block text-gray-700">Abonnement</label>
                <select id="subscription" name="registerabonnement" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
                    <option value="" disabled selected>Selecteer een abonnement</option>
                    <option value="basic">Comfortabonnement</option>
                    <option value="premium">Premiumabonnement</option>
                    <option value="all-in">All inabonnement</option>
                </select>
                <?php if (isset($_POST['registreren']) && empty($_POST['registerabonnement'])) : ?>
                    <p class="red-text">Kies een abonnement</p>
                <?php endif ?>
            </div>
            <button type="submit" name="registreren" class="w-full bg-purple-600 text-white py-2  px-4 rounded-lg hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Registreren</button>
        </form>
    </div>
</div>