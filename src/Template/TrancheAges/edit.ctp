<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrancheAge $trancheAge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trancheAge->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trancheAge->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tranche Ages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Suspects'), ['controller' => 'Suspects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Suspect'), ['controller' => 'Suspects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trancheAges form large-9 medium-8 columns content">
    <?= $this->Form->create($trancheAge) ?>
    <fieldset>
        <legend><?= __('Edit Tranche Age') ?></legend>
        <?php
            echo $this->Form->control('tranche');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
