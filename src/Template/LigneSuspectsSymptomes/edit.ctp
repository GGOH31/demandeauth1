<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LigneSuspectsSymptome $ligneSuspectsSymptome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ligneSuspectsSymptome->suspect_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ligneSuspectsSymptome->suspect_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ligne Suspects Symptomes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Suspects'), ['controller' => 'Suspects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Suspect'), ['controller' => 'Suspects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Symptomes'), ['controller' => 'Symptomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Symptome'), ['controller' => 'Symptomes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ligneSuspectsSymptomes form large-9 medium-8 columns content">
    <?= $this->Form->create($ligneSuspectsSymptome) ?>
    <fieldset>
        <legend><?= __('Edit Ligne Suspects Symptome') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
