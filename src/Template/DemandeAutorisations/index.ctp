<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DemandeAutorisation[]|\Cake\Collection\CollectionInterface $demandeAutorisations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Demande Autorisation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Motifs'), ['controller' => 'Motifs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motif'), ['controller' => 'Motifs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demandeurs'), ['controller' => 'Demandeurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demandeur'), ['controller' => 'Demandeurs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utilisateurs'), ['controller' => 'Utilisateurs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utilisateur'), ['controller' => 'Utilisateurs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demandeAutorisations index large-9 medium-8 columns content">
    <h3><?= __('Demande Autorisations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('motif_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('demandeur_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_valide_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_demande') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etat_demande') ?></th>
                <th scope="col"><?= $this->Paginator->sort('destination') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documents_justificatif') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nbre_jours') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_depart') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_demande') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time_demande') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demandeAutorisations as $demandeAutorisation): ?>
            <tr>
                <td><?= $this->Number->format($demandeAutorisation->id) ?></td>
                <td><?= $demandeAutorisation->has('motif') ? $this->Html->link($demandeAutorisation->motif->id, ['controller' => 'Motifs', 'action' => 'view', $demandeAutorisation->motif->id]) : '' ?></td>
                <td><?= $demandeAutorisation->has('demandeur') ? $this->Html->link($demandeAutorisation->demandeur->id, ['controller' => 'Demandeurs', 'action' => 'view', $demandeAutorisation->demandeur->id]) : '' ?></td>
                <td><?= $demandeAutorisation->has('utilisateur') ? $this->Html->link($demandeAutorisation->utilisateur->id, ['controller' => 'Utilisateurs', 'action' => 'view', $demandeAutorisation->utilisateur->id]) : '' ?></td>
                <td><?= $this->Number->format($demandeAutorisation->numero_demande) ?></td>
                <td><?= h($demandeAutorisation->etat_demande) ?></td>
                <td><?= h($demandeAutorisation->destination) ?></td>
                <td><?= h($demandeAutorisation->documents_justificatif) ?></td>
                <td><?= $this->Number->format($demandeAutorisation->nbre_jours) ?></td>
                <td><?= h($demandeAutorisation->date_depart) ?></td>
                <td><?= h($demandeAutorisation->date_demande) ?></td>
                <td><?= h($demandeAutorisation->time_demande) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $demandeAutorisation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $demandeAutorisation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $demandeAutorisation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeAutorisation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
