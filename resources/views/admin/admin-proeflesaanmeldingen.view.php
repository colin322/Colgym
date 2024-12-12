<?php require_once '../controllers/showProefLesAanmeldingen.php' ?>
<?php $members = showProefLesAanmeldingen() ?>

<div class="overflow-x-auto">
    <table class="w-full whitespace-nowrap">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">E-mail</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telefoon nummer</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Datum</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <?php foreach ($members as $member) : ?>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap"><?= $member['naam'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?= $member['email'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?= $member['telefoonnummer'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?= $member['datum'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>