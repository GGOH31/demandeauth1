<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statistique $statistique
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Statistiques'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="statistiques form large-9 medium-8 columns content">
    <?= $this->Form->create($statistique) ?>
    <fieldset>
        <legend><?= __('Add Statistique') ?></legend>
        <?php
            echo $this->Form->control('jour_date');
            echo $this->Form->control('jour_nbre_cas');
            echo $this->Form->control('jour_nbre_gueris');
            echo $this->Form->control('jour_nbre_deces');
            echo $this->Form->control('total_nbre_cas');
            echo $this->Form->control('total_nbre_gueris');
            echo $this->Form->control('total_nbre_deces');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
