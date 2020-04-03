<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Antecedent $antecedent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $antecedent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $antecedent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Antecedents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ligne Suspects Antecedents'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ligne Suspects Antecedent'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="antecedents form large-9 medium-8 columns content">
    <?= $this->Form->create($antecedent) ?>
    <fieldset>
        <legend><?= __('Edit Antecedent') ?></legend>
        <?php
            echo $this->Form->control('libelle');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
