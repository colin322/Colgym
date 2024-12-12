<?php require_once '../controllers/events/showevents.php'; ?>
<?php require_once '../controllers/events/eventaanmelding.php'; ?>
<?php $event = showEvents(); ?>
<?php $validate = aanmeldingEvent(); ?>

<div class="flex items-center justify-center min-h-screen py-12 bg-purple-600">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Meld je aan voor een Evenement</h2>
        <form method="POST" class="space-y-6">
            <div>
                <label for="naam_event_aanmelding" class="block text-sm font-medium text-gray-700">username</label>
                <input type="text" id="name" name="naam_event_aanmelding" class="mt-1 block w-full px-3 py-2 border border-gray-300 <?php if (isset($validate) && empty($_POST['naam_event_aanmelding'])) : ?> border-red-500 <?php endif ?>rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="email_event_aanmelding" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email_event_aanmelding" name="email_event_aanmelding" class="mt-1 block w-full px-3 py-2 border border-gray-300  <?php if (isset($validate) && empty($_POST['email_event_aanmelding'])) : ?> border-red-500 <?php endif ?>rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>
            <div>
                <label for="les_event_aanmelding" class="block text-sm font-medium text-gray-700">Kies een les</label>
                <select id="les_event_aanmelding" name="les_event_aanmelding" class="mt-1 block w-full px-3 py-2 border border-gray-300 <?php if (isset($validate) && empty($_POST['les_event_aanmelding'])) : ?> border-red-500 <?php endif ?>rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="" disabled selected>Selecteer een evenement</option>
                <?php foreach ($event as $events) : ?>
                    <option value="<?= $events['naam'] ?>"><?= $events['naam'] ?></option>
                <?php endforeach ?>
                </select>
            </div>
            <div>
                <?php if (isset($validate)) :?>
                    <p class=red-text><?= $validate ?></p>
                <?php endif ?>
            </div>
            <div>
                <button name="event_aanmelding" type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Aanmelden</button>
            </div>
        </form>
    </div>
</div>