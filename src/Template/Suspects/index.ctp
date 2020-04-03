<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Suspect[]|\Cake\Collection\CollectionInterface $suspects
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Suspect'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tranche Ages'), ['controller' => 'TrancheAges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tranche Age'), ['controller' => 'TrancheAges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ligne Suspects Antecedents'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ligne Suspects Antecedent'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ligne Suspects Symptomes'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ligne Suspects Symptome'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="suspects index large-9 medium-8 columns content">
    <h3><?= __('Suspects') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tranche_age_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emetteur_contact') ?></th>
                <th scope="col"><?= $this->Paginator->sort('suspect_nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('suspect_contact') ?></th>
                <th scope="col"><?= $this->Paginator->sort('suspect_situation_geo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('suspect_date_naissance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('suspect_sexe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('suspect_etat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_declaration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('heure_declaration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suspects as $suspect): ?>
            <tr>
                <td><?= $this->Number->format($suspect->id) ?></td>
                <td><?= $suspect->has('tranche_age') ? $this->Html->link($suspect->tranche_age->id, ['controller' => 'TrancheAges', 'action' => 'view', $suspect->tranche_age->id]) : '' ?></td>
                <td><?= h($suspect->emetteur_contact) ?></td>
                <td><?= h($suspect->suspect_nom) ?></td>
                <td><?= h($suspect->suspect_contact) ?></td>
                <td><?= h($suspect->suspect_situation_geo) ?></td>
                <td><?= h($suspect->suspect_date_naissance) ?></td>
                <td><?= h($suspect->suspect_sexe) ?></td>
                <td><?= h($suspect->suspect_etat) ?></td>
                <td><?= h($suspect->date_declaration) ?></td>
                <td><?= h($suspect->heure_declaration) ?></td>
                <td><?= h($suspect->longitude) ?></td>
                <td><?= h($suspect->latitude) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $suspect->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $suspect->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $suspect->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suspect->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
