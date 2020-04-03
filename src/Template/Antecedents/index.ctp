<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Antecedent[]|\Cake\Collection\CollectionInterface $antecedents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Antecedent'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ligne Suspects Antecedents'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ligne Suspects Antecedent'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="antecedents index large-9 medium-8 columns content">
    <h3><?= __('Antecedents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('libelle') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($antecedents as $antecedent): ?>
            <tr>
                <td><?= $this->Number->format($antecedent->id) ?></td>
                <td><?= h($antecedent->libelle) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $antecedent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $antecedent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $antecedent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $antecedent->id)]) ?>
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
