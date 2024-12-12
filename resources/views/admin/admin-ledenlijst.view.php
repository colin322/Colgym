<?php require_once '../controllers/members/showmembers.php'; ?>
<?php $members = showMembers() ?>

<div class="overflow-x-auto">
    <table class="w-full whitespace-nowrap">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">E-mail</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Abonnement</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <?php foreach ($members as $member) : ?>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap"><?= $member['username'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?= $member['email'] ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?= $member['abonnement_soort'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
