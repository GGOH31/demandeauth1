<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Motif $motif
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $motif->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $motif->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Motifs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Demande Autorisations'), ['controller' => 'DemandeAutorisations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demande Autorisation'), ['controller' => 'DemandeAutorisations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="motifs form large-9 medium-8 columns content">
    <?= $this->Form->create($motif) ?>
    <fieldset>
        <legend><?= __('Edit Motif') ?></legend>
        <?php
            echo $this->Form->control('libelle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
