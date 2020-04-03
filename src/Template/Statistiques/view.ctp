<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statistique $statistique
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Statistique'), ['action' => 'edit', $statistique->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Statistique'), ['action' => 'delete', $statistique->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statistique->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Statistiques'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statistique'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="statistiques view large-9 medium-8 columns content">
    <h3><?= h($statistique->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($statistique->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jour Nbre Cas') ?></th>
            <td><?= $this->Number->format($statistique->jour_nbre_cas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jour Nbre Gueris') ?></th>
            <td><?= $this->Number->format($statistique->jour_nbre_gueris) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jour Nbre Deces') ?></th>
            <td><?= $this->Number->format($statistique->jour_nbre_deces) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Nbre Cas') ?></th>
            <td><?= $this->Number->format($statistique->total_nbre_cas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Nbre Gueris') ?></th>
            <td><?= $this->Number->format($statistique->total_nbre_gueris) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Nbre Deces') ?></th>
            <td><?= $this->Number->format($statistique->total_nbre_deces) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jour Date') ?></th>
            <td><?= h($statistique->jour_date) ?></td>
        </tr>
    </table>
</div>
