<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statistique[]|\Cake\Collection\CollectionInterface $statistiques
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Statistique'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="statistiques index large-9 medium-8 columns content">
    <h3><?= __('Statistiques') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jour_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jour_nbre_cas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jour_nbre_gueris') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jour_nbre_deces') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_nbre_cas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_nbre_gueris') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_nbre_deces') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($statistiques as $statistique): ?>
            <tr>
                <td><?= $this->Number->format($statistique->id) ?></td>
                <td><?= h($statistique->jour_date) ?></td>
                <td><?= $this->Number->format($statistique->jour_nbre_cas) ?></td>
                <td><?= $this->Number->format($statistique->jour_nbre_gueris) ?></td>
                <td><?= $this->Number->format($statistique->jour_nbre_deces) ?></td>
                <td><?= $this->Number->format($statistique->total_nbre_cas) ?></td>
                <td><?= $this->Number->format($statistique->total_nbre_gueris) ?></td>
                <td><?= $this->Number->format($statistique->total_nbre_deces) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $statistique->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statistique->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statistique->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statistique->id)]) ?>
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
