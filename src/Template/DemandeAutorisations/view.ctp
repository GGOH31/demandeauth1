<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DemandeAutorisation $demandeAutorisation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Demande Autorisation'), ['action' => 'edit', $demandeAutorisation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Demande Autorisation'), ['action' => 'delete', $demandeAutorisation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeAutorisation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Demande Autorisations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demande Autorisation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Motifs'), ['controller' => 'Motifs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motif'), ['controller' => 'Motifs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demandeurs'), ['controller' => 'Demandeurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demandeur'), ['controller' => 'Demandeurs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Utilisateurs'), ['controller' => 'Utilisateurs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utilisateur'), ['controller' => 'Utilisateurs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="demandeAutorisations view large-9 medium-8 columns content">
    <h3><?= h($demandeAutorisation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Motif') ?></th>
            <td><?= $demandeAutorisation->has('motif') ? $this->Html->link($demandeAutorisation->motif->id, ['controller' => 'Motifs', 'action' => 'view', $demandeAutorisation->motif->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demandeur') ?></th>
            <td><?= $demandeAutorisation->has('demandeur') ? $this->Html->link($demandeAutorisation->demandeur->id, ['controller' => 'Demandeurs', 'action' => 'view', $demandeAutorisation->demandeur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Utilisateur') ?></th>
            <td><?= $demandeAutorisation->has('utilisateur') ? $this->Html->link($demandeAutorisation->utilisateur->id, ['controller' => 'Utilisateurs', 'action' => 'view', $demandeAutorisation->utilisateur->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etat Demande') ?></th>
            <td><?= h($demandeAutorisation->etat_demande) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destination') ?></th>
            <td><?= h($demandeAutorisation->destination) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documents Justificatif') ?></th>
            <td><?= h($demandeAutorisation->documents_justificatif) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($demandeAutorisation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Demande') ?></th>
            <td><?= $this->Number->format($demandeAutorisation->numero_demande) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbre Jours') ?></th>
            <td><?= $this->Number->format($demandeAutorisation->nbre_jours) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Depart') ?></th>
            <td><?= h($demandeAutorisation->date_depart) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Demande') ?></th>
            <td><?= h($demandeAutorisation->date_demande) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time Demande') ?></th>
            <td><?= h($demandeAutorisation->time_demande) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text Justificatif') ?></h4>
        <?= $this->Text->autoParagraph(h($demandeAutorisation->text_justificatif)); ?>
    </div>
    <div class="row">
        <h4><?= __('Commentaire Validation') ?></h4>
        <?= $this->Text->autoParagraph(h($demandeAutorisation->commentaire_validation)); ?>
    </div>
</div>
