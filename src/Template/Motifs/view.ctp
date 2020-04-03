<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Motif $motif
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Motif'), ['action' => 'edit', $motif->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Motif'), ['action' => 'delete', $motif->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motif->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Motifs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motif'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demande Autorisations'), ['controller' => 'DemandeAutorisations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demande Autorisation'), ['controller' => 'DemandeAutorisations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="motifs view large-9 medium-8 columns content">
    <h3><?= h($motif->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($motif->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($motif->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Demande Autorisations') ?></h4>
        <?php if (!empty($motif->demande_autorisations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Motif Id') ?></th>
                <th scope="col"><?= __('Demandeur Id') ?></th>
                <th scope="col"><?= __('User Valide Id') ?></th>
                <th scope="col"><?= __('Numero Demande') ?></th>
                <th scope="col"><?= __('Etat Demande') ?></th>
                <th scope="col"><?= __('Destination') ?></th>
                <th scope="col"><?= __('Text Justificatif') ?></th>
                <th scope="col"><?= __('Documents Justificatif') ?></th>
                <th scope="col"><?= __('Commentaire Validation') ?></th>
                <th scope="col"><?= __('Nbre Jours') ?></th>
                <th scope="col"><?= __('Date Depart') ?></th>
                <th scope="col"><?= __('Date Demande') ?></th>
                <th scope="col"><?= __('Time Demande') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($motif->demande_autorisations as $demandeAutorisations): ?>
            <tr>
                <td><?= h($demandeAutorisations->id) ?></td>
                <td><?= h($demandeAutorisations->motif_id) ?></td>
                <td><?= h($demandeAutorisations->demandeur_id) ?></td>
                <td><?= h($demandeAutorisations->user_valide_id) ?></td>
                <td><?= h($demandeAutorisations->numero_demande) ?></td>
                <td><?= h($demandeAutorisations->etat_demande) ?></td>
                <td><?= h($demandeAutorisations->destination) ?></td>
                <td><?= h($demandeAutorisations->text_justificatif) ?></td>
                <td><?= h($demandeAutorisations->documents_justificatif) ?></td>
                <td><?= h($demandeAutorisations->commentaire_validation) ?></td>
                <td><?= h($demandeAutorisations->nbre_jours) ?></td>
                <td><?= h($demandeAutorisations->date_depart) ?></td>
                <td><?= h($demandeAutorisations->date_demande) ?></td>
                <td><?= h($demandeAutorisations->time_demande) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DemandeAutorisations', 'action' => 'view', $demandeAutorisations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DemandeAutorisations', 'action' => 'edit', $demandeAutorisations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DemandeAutorisations', 'action' => 'delete', $demandeAutorisations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeAutorisations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
