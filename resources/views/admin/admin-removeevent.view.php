<?php require_once '../controllers/events/showevents.php'; ?>
<?php require_once '../controllers/events/remove-events.php'; ?>
<?php $events = showEvents() ?>
<?php $remove_events = removeEvent() ?>

<div class="overflow-x-auto">
    <table class="w-full whitespace-nowrap">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam Evenement</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Verwijder Evenement</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach ($events as $event) : ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap"><?= $event['naam'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <form method="POST">
                            <input type="hidden" name="event_id" value="<?= $event['id'] ?>">
                            <button type="submit" name="remove-event" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded flex items-center">
                                🗑️
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>