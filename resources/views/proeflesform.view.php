<?php if (isset($_POST['proefles'])) : ?>
    <?php require_once '../controllers/proefles.php'; ?>
    <?php $validate = aanmeldingProefLes() ?>
<?php endif ?>

<div class="flex items-center justify-center min-h-screen py-12 bg-purple-600">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Meld je aan voor een proefles</h2>
        <form method="POST" class="space-y-6">
            <div>
                <label for="name_proefles" class="block text-sm font-medium text-gray-700">Naam</label>
                <input type="text" id="name" name="name_proefles"class="mt-1 block w-full px-3 py-2 border border-gray-300 <?php if (isset($validate) && empty($_POST['name_proefles'])) : ?> border-red-500 <?php endif ?>rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="email_proefles" class="block text-sm font-medium text-gray-700">Emailadres</label>
                <input type="email" id="email" name="email_proefles" class="mt-1 block w-full px-3 py-2 border border-gray-300 <?php if (isset($validate) && empty($_POST['email_proefles'])) : ?> border-red-500 <?php endif ?>rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="nummer_proefles" class="block text-sm font-medium text-gray-700">Telefoonnummer</label>
                <input type="tel" id="phone" name="nummer_proefles" class="mt-1 block w-full px-3 py-2 border border-gray-300  <?php if (isset($validate) && empty($_POST['nummer_proefles'])) : ?> border-red-500 <?php endif ?>rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="date_proefles" class="block text-sm font-medium text-gray-700">Datum</label>
                <input type="date" id="date" name="date_proefles" class="mt-1 block w-full px-3 py-2 border border-gray-300  <?php if (isset($validate) && empty($_POST['date_proefles'])) : ?> border-red-500 <?php endif ?>rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <?php if (isset($validate)) :?>
                    <p class=red-text><?= $validate ?></p>
                <?php endif ?>
            </div>
            <div>
                <button name="proefles" type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Aanmelden</button>
            </div>
        </form>
    </div>
</div>
