<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LigneSuspectsAntecedent[]|\Cake\Collection\CollectionInterface $ligneSuspectsAntecedents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ligne Suspects Antecedent'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Suspects'), ['controller' => 'Suspects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Suspect'), ['controller' => 'Suspects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Antecedents'), ['controller' => 'Antecedents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Antecedent'), ['controller' => 'Antecedents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ligneSuspectsAntecedents index large-9 medium-8 columns content">
    <h3><?= __('Ligne Suspects Antecedents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('suspect_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('antecedent_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ligneSuspectsAntecedents as $ligneSuspectsAntecedent): ?>
            <tr>
                <td><?= $ligneSuspectsAntecedent->has('suspect') ? $this->Html->link($ligneSuspectsAntecedent->suspect->id, ['controller' => 'Suspects', 'action' => 'view', $ligneSuspectsAntecedent->suspect->id]) : '' ?></td>
                <td><?= $ligneSuspectsAntecedent->has('antecedent') ? $this->Html->link($ligneSuspectsAntecedent->antecedent->id, ['controller' => 'Antecedents', 'action' => 'view', $ligneSuspectsAntecedent->antecedent->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ligneSuspectsAntecedent->suspect_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ligneSuspectsAntecedent->suspect_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ligneSuspectsAntecedent->suspect_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ligneSuspectsAntecedent->suspect_id)]) ?>
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
