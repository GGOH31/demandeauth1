<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Symptome $symptome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Symptomes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ligne Suspects Symptomes'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ligne Suspects Symptome'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="symptomes form large-9 medium-8 columns content">
    <?= $this->Form->create($symptome) ?>
    <fieldset>
        <legend><?= __('Add Symptome') ?></legend>
        <?php
            echo $this->Form->control('libelle');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
