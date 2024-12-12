<?php require_once '../controllers/log-in/wijzig.php'; ?>
<?php $validate = wijzig(); ?>

<div class="flex items-center justify-center min-h-screen bg-purple-600">
    <div class="bg-white p-12 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-purple-600 mb-8 text-center">Wijzig</h2>
        <form method="POST">
            <div class="mb-4">
                <label for="wijzig_email" class="block text-gray-700">E-mail</label>
                <input type="email" id="email" value="<?= $_SESSION['login']['email']?>"name="wijzig_email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
                <?php if (isset($validate)) : ?>
                    <p class="red-text">Deze email bestaat al</p>
                <?php endif ?>
            </div>
            <div class="mb-6">
                <label for="wijzig_username" class="block text-gray-700">Naam</label>
                <input type="text" value="<?= $_SESSION['login']['username']?>" id="password" name="wijzig_username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
            </div>
            <div class="mb-6">
                <label for="wijzig_abonnement" class="block text-gray-700">Abonnement</label>
                <select id="subscription" name="wijzig_abonnement" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
                    <option value="<?= $_SESSION['login']['abonnement_soort']?>"><?= $_SESSION['login']['abonnement_soort'] ?></option>
                    <option value="Comfort">Comfort abonnement</option>
                    <option value="Premium">Premium abonnement</option>
                    <option value="All-in">All-in abonnement</option>
                </select>
            </div>
            <button type="submit" name="wijzig" class="w-full bg-purple-600 text-white py-2  px-4 rounded-lg hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Wijzig</button>
        </form>
    </div>
</div>