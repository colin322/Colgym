<?php require_once '../controllers/events/showevents.php'; ?>
<?php $card = showEvents() ?>

<div class="max-w-6xl mx-auto mt-8 mb-8">
<h1 class="text-3xl font-bold mb-8 text-center">Evenementen</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php foreach ($card as $cards) : ?>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="<?= $cards['afbeelding'] ?>" alt="Evenement" class="w-full h-32 object-cover object-center">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800"><?= $cards['naam'] ?></h2>
                    <p class="text-gray-600 mt-2"><?= $cards['omschrijving'] ?></p>
                    <div class="mt-4">
                        <a href="?page=evenementeninfo&id=<?= $cards['id']?>" class="text-indigo-500 hover:text-indigo-600 font-semibold">Meer informatie</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</div>