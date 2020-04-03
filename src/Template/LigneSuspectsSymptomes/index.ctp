<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LigneSuspectsSymptome[]|\Cake\Collection\CollectionInterface $ligneSuspectsSymptomes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ligne Suspects Symptome'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Suspects'), ['controller' => 'Suspects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Suspect'), ['controller' => 'Suspects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Symptomes'), ['controller' => 'Symptomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Symptome'), ['controller' => 'Symptomes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ligneSuspectsSymptomes index large-9 medium-8 columns content">
    <h3><?= __('Ligne Suspects Symptomes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('suspect_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('symptome_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ligneSuspectsSymptomes as $ligneSuspectsSymptome): ?>
            <tr>
                <td><?= $ligneSuspectsSymptome->has('suspect') ? $this->Html->link($ligneSuspectsSymptome->suspect->id, ['controller' => 'Suspects', 'action' => 'view', $ligneSuspectsSymptome->suspect->id]) : '' ?></td>
                <td><?= $ligneSuspectsSymptome->has('symptome') ? $this->Html->link($ligneSuspectsSymptome->symptome->id, ['controller' => 'Symptomes', 'action' => 'view', $ligneSuspectsSymptome->symptome->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ligneSuspectsSymptome->suspect_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ligneSuspectsSymptome->suspect_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ligneSuspectsSymptome->suspect_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ligneSuspectsSymptome->suspect_id)]) ?>
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
