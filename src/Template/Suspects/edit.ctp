<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Suspect $suspect
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $suspect->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $suspect->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Suspects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tranche Ages'), ['controller' => 'TrancheAges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tranche Age'), ['controller' => 'TrancheAges', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ligne Suspects Antecedents'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ligne Suspects Antecedent'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ligne Suspects Symptomes'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ligne Suspects Symptome'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="suspects form large-9 medium-8 columns content">
    <?= $this->Form->create($suspect) ?>
    <fieldset>
        <legend><?= __('Edit Suspect') ?></legend>
        <?php
            echo $this->Form->control('tranche_age_id', ['options' => $trancheAges]);
            echo $this->Form->control('emetteur_contact');
            echo $this->Form->control('suspect_nom');
            echo $this->Form->control('suspect_contact');
            echo $this->Form->control('suspect_situation_geo');
            echo $this->Form->control('suspect_date_naissance', ['empty' => true]);
            echo $this->Form->control('suspect_sexe');
            echo $this->Form->control('suspect_etat');
            echo $this->Form->control('date_declaration');
            echo $this->Form->control('heure_declaration');
            echo $this->Form->control('longitude');
            echo $this->Form->control('latitude');
            echo $this->Form->control('commentaire_suspect');
            echo $this->Form->control('commentaire_analyse');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
