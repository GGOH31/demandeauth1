<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LigneSuspectsAntecedent $ligneSuspectsAntecedent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ligneSuspectsAntecedent->suspect_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ligneSuspectsAntecedent->suspect_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ligne Suspects Antecedents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Suspects'), ['controller' => 'Suspects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Suspect'), ['controller' => 'Suspects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Antecedents'), ['controller' => 'Antecedents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Antecedent'), ['controller' => 'Antecedents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ligneSuspectsAntecedents form large-9 medium-8 columns content">
    <?= $this->Form->create($ligneSuspectsAntecedent) ?>
    <fieldset>
        <legend><?= __('Edit Ligne Suspects Antecedent') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
