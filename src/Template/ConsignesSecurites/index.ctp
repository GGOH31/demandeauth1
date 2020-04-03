<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConsignesSecurite[]|\Cake\Collection\CollectionInterface $consignesSecurites
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Consignes Securite'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consignesSecurites index large-9 medium-8 columns content">
    <h3><?= __('Consignes Securites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consigne') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url_image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consignesSecurites as $consignesSecurite): ?>
            <tr>
                <td><?= $this->Number->format($consignesSecurite->id) ?></td>
                <td><?= h($consignesSecurite->consigne) ?></td>
                <td><?= h($consignesSecurite->url_image) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consignesSecurite->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consignesSecurite->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consignesSecurite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consignesSecurite->id)]) ?>
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
