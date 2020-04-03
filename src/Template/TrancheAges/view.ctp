<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrancheAge $trancheAge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tranche Age'), ['action' => 'edit', $trancheAge->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tranche Age'), ['action' => 'delete', $trancheAge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trancheAge->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tranche Ages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tranche Age'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Suspects'), ['controller' => 'Suspects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Suspect'), ['controller' => 'Suspects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trancheAges view large-9 medium-8 columns content">
    <h3><?= h($trancheAge->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tranche') ?></th>
            <td><?= h($trancheAge->tranche) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($trancheAge->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($trancheAge->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Suspects') ?></h4>
        <?php if (!empty($trancheAge->suspects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tranche Age Id') ?></th>
                <th scope="col"><?= __('Emetteur Contact') ?></th>
                <th scope="col"><?= __('Suspect Nom') ?></th>
                <th scope="col"><?= __('Suspect Contact') ?></th>
                <th scope="col"><?= __('Suspect Situation Geo') ?></th>
                <th scope="col"><?= __('Suspect Date Naissance') ?></th>
                <th scope="col"><?= __('Suspect Sexe') ?></th>
                <th scope="col"><?= __('Suspect Etat') ?></th>
                <th scope="col"><?= __('Date Declaration') ?></th>
                <th scope="col"><?= __('Heure Declaration') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Commentaire Suspect') ?></th>
                <th scope="col"><?= __('Commentaire Analyse') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($trancheAge->suspects as $suspects): ?>
            <tr>
                <td><?= h($suspects->id) ?></td>
                <td><?= h($suspects->tranche_age_id) ?></td>
                <td><?= h($suspects->emetteur_contact) ?></td>
                <td><?= h($suspects->suspect_nom) ?></td>
                <td><?= h($suspects->suspect_contact) ?></td>
                <td><?= h($suspects->suspect_situation_geo) ?></td>
                <td><?= h($suspects->suspect_date_naissance) ?></td>
                <td><?= h($suspects->suspect_sexe) ?></td>
                <td><?= h($suspects->suspect_etat) ?></td>
                <td><?= h($suspects->date_declaration) ?></td>
                <td><?= h($suspects->heure_declaration) ?></td>
                <td><?= h($suspects->longitude) ?></td>
                <td><?= h($suspects->latitude) ?></td>
                <td><?= h($suspects->commentaire_suspect) ?></td>
                <td><?= h($suspects->commentaire_analyse) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Suspects', 'action' => 'view', $suspects->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Suspects', 'action' => 'edit', $suspects->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Suspects', 'action' => 'delete', $suspects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suspects->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
