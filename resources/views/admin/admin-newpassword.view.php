<?php require_once '../controllers/log-in/wijzigpassword.php'; ?>
<?php $validate = wijzigPassword(); ?>

<div class="flex items-center justify-center min-h-screen bg-purple-600">
    <div class="bg-white p-12 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-purple-600 mb-8 text-center">Wijzig</h2>
        <form method="POST">
            <div class="mb-6">
                <label for="wijzig_password1" class="block text-gray-700">Huidig wachtwoord</label>
                <input type="password" value="" id="password" name="wijzig_password1" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
            </div>
            <div class="mb-6">
                <label for="wijzig_password2" class="block text-gray-700">Nieuw wachtwoord</label>
                <input type="password" value="" id="password" name="wijzig_password2" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
            </div>
            <?php if (isset($validate)) :?>
                    <p class=red-text><?= $validate ?></p>
                <?php endif ?>
            <button type="submit" name="wijzig_password3" class="w-full bg-purple-600 text-white py-2  px-4 rounded-lg hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Wijzig</button>
        </form>
        
    </div>
</div>