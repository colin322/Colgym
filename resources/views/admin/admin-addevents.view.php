<?php if (isset($_POST['add_event'])) : ?>
    <?php require_once '../controllers/events/addevent.php'; ?>
    <?php $validate = addEvent(); ?>
<?php endif ?>


<div class="flex items-center justify-center min-h-screen bg-purple-600">
    <div class="bg-white p-12 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-purple-600 mb-8 text-center">Voeg evenementen toe</h2>
        <form method="POST">
            <div class="mb-4">
                <label for="naamevent" class="block text-gray-700">Naam</label>
                <input value="<?php if (isset($_POST['naam_event'])) : ?><?=$_POST['naam_event']?><?php endif ?>" type="text" id="naam_event" name="naam_event" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400 <?php if (isset($validate) && empty($_POST['naam_event'])) : ?> border-red-500 <?php endif ?>">
            </div>
            <div class="mb-6">
                <label for="afbeeldingURL_event" class="block text-gray-700">Afbeelding URL</label>
                <input value="<?php if (isset($_POST['afbeeldingURL_event'])) : ?><?=$_POST['afbeeldingURL_event']?><?php endif ?>" type="text" id="afbeeldingURL_event" name="afbeeldingURL_event" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400">
            </div>
            <div class="mb-6">
                <label for="omschrijving-event" class="block text-gray-700">Omschrijving</label>
                <input value="<?php if (isset($_POST['omschrijving_event'])) : ?><?=$_POST['omschrijving_event']?><?php endif ?>" type="text" id="omschrijving_event" name="omschrijving_event" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400 <?php if (isset($validate) && empty($_POST['omschrijving_event'])) : ?> border-red-500 <?php endif ?>">
            </div>
            <div class="mb-6">
                <label for="datum-tijd_event" class="block text-gray-700">Datum/tijd</label>
                <input value="<?php if (isset($_POST['datum-tijd_event'])) : ?><?=$_POST['datum-tijd_event']?><?php endif ?>" type="datetime-local" id="datum-tijd_event" name="datum-tijd_event" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400 <?php if (isset($validate) && empty($_POST['datum-tijd_event'])) : ?> border-red-500 <?php endif ?>">
            </div>
            <div class="mb-6">
                <label for="plaats_event" class="block text-gray-700">Plaats</label>
                <input value="<?php if (isset($_POST['plaats_event'])) : ?><?=$_POST['plaats_event']?><?php endif ?>" type="text" id="plaats_event" name="plaats_event" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-purple-400 <?php if (isset($validate) && empty($_POST['plaats_event'])) : ?> border-red-500 <?php endif ?>">
                <?php if (isset($validate)) :?>
                <p class="red-text"><?= $validate ?></p>
            <?php endif ?> 
            </div>   
            <button type="submit" name="add_event" class="w-full bg-purple-600 text-white py-2  px-4 rounded-lg hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Voeg toe</button>
        </form>
    </div>
</div>