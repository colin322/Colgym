<?php require_once '../controllers/events/showevents.php'; ?>
<?php $events = showEventsInfo() ?>

<div class="max-w-4xl mx-auto py-8 px-4 bg-white shadow-lg rounded-lg mt-8 mb-8">
  <div class="text-center mb-8">
    <h1 class="text-4xl font-bold text-purple-700"><?= $events['naam'] ?></h1>
  </div>

  <div class="mb-8">
    <p class="text-lg text-gray-700"><?= $events['omschrijving'] ?></p>
  </div>

  <div class="flex flex-col sm:flex-row sm:justify-between mb-8 space-y-8 sm:space-y-0 sm:space-x-8">
    <div class="sm:w-1/3">
      <h2 class="text-2xl font-semibold text-purple-600">Datum & Tijd</h2>
      <p class="text-lg text-gray-600"><?= $events['datum_tijd'] ?></p>
    </div>
    <div class="sm:w-1/3">
      <h2 class="text-2xl font-semibold text-purple-600">Locatie</h2>
      <p class="text-lg text-gray-600">Plaats: <?= $events['plaats'] ?></p>
    </div>
  </div>
  <div class="mx-auto text-center mb-8">
  <a href="?page=admin-eventform" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Meld mij aan</a>
</div>
</div>

