<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LigneSuspectsSymptome $ligneSuspectsSymptome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ligne Suspects Symptome'), ['action' => 'edit', $ligneSuspectsSymptome->suspect_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ligne Suspects Symptome'), ['action' => 'delete', $ligneSuspectsSymptome->suspect_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ligneSuspectsSymptome->suspect_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ligne Suspects Symptomes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ligne Suspects Symptome'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Suspects'), ['controller' => 'Suspects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Suspect'), ['controller' => 'Suspects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Symptomes'), ['controller' => 'Symptomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Symptome'), ['controller' => 'Symptomes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ligneSuspectsSymptomes view large-9 medium-8 columns content">
    <h3><?= h($ligneSuspectsSymptome->suspect_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Suspect') ?></th>
            <td><?= $ligneSuspectsSymptome->has('suspect') ? $this->Html->link($ligneSuspectsSymptome->suspect->id, ['controller' => 'Suspects', 'action' => 'view', $ligneSuspectsSymptome->suspect->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Symptome') ?></th>
            <td><?= $ligneSuspectsSymptome->has('symptome') ? $this->Html->link($ligneSuspectsSymptome->symptome->id, ['controller' => 'Symptomes', 'action' => 'view', $ligneSuspectsSymptome->symptome->id]) : '' ?></td>
        </tr>
    </table>
</div>
