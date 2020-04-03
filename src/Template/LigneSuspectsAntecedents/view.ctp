<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LigneSuspectsAntecedent $ligneSuspectsAntecedent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ligne Suspects Antecedent'), ['action' => 'edit', $ligneSuspectsAntecedent->suspect_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ligne Suspects Antecedent'), ['action' => 'delete', $ligneSuspectsAntecedent->suspect_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ligneSuspectsAntecedent->suspect_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ligne Suspects Antecedents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ligne Suspects Antecedent'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Suspects'), ['controller' => 'Suspects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Suspect'), ['controller' => 'Suspects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Antecedents'), ['controller' => 'Antecedents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Antecedent'), ['controller' => 'Antecedents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ligneSuspectsAntecedents view large-9 medium-8 columns content">
    <h3><?= h($ligneSuspectsAntecedent->suspect_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Suspect') ?></th>
            <td><?= $ligneSuspectsAntecedent->has('suspect') ? $this->Html->link($ligneSuspectsAntecedent->suspect->id, ['controller' => 'Suspects', 'action' => 'view', $ligneSuspectsAntecedent->suspect->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Antecedent') ?></th>
            <td><?= $ligneSuspectsAntecedent->has('antecedent') ? $this->Html->link($ligneSuspectsAntecedent->antecedent->id, ['controller' => 'Antecedents', 'action' => 'view', $ligneSuspectsAntecedent->antecedent->id]) : '' ?></td>
        </tr>
    </table>
</div>
