<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Symptome[]|\Cake\Collection\CollectionInterface $symptomes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Symptome'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ligne Suspects Symptomes'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ligne Suspects Symptome'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="symptomes index large-9 medium-8 columns content">
    <h3><?= __('Symptomes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libelle') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($symptomes as $symptome): ?>
            <tr>
                <td><?= $this->Number->format($symptome->id) ?></td>
                <td><?= h($symptome->libelle) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $symptome->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $symptome->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $symptome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $symptome->id)]) ?>
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
