<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrancheAge[]|\Cake\Collection\CollectionInterface $trancheAges
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tranche Age'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Suspects'), ['controller' => 'Suspects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Suspect'), ['controller' => 'Suspects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trancheAges index large-9 medium-8 columns content">
    <h3><?= __('Tranche Ages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tranche') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trancheAges as $trancheAge): ?>
            <tr>
                <td><?= $this->Number->format($trancheAge->id) ?></td>
                <td><?= h($trancheAge->tranche) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trancheAge->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trancheAge->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trancheAge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trancheAge->id)]) ?>
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
