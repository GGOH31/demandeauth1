<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Suspect $suspect
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Suspect'), ['action' => 'edit', $suspect->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Suspect'), ['action' => 'delete', $suspect->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suspect->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Suspects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Suspect'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tranche Ages'), ['controller' => 'TrancheAges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tranche Age'), ['controller' => 'TrancheAges', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ligne Suspects Antecedents'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ligne Suspects Antecedent'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ligne Suspects Symptomes'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ligne Suspects Symptome'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="suspects view large-9 medium-8 columns content">
    <h3><?= h($suspect->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tranche Age') ?></th>
            <td><?= $suspect->has('tranche_age') ? $this->Html->link($suspect->tranche_age->id, ['controller' => 'TrancheAges', 'action' => 'view', $suspect->tranche_age->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emetteur Contact') ?></th>
            <td><?= h($suspect->emetteur_contact) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suspect Nom') ?></th>
            <td><?= h($suspect->suspect_nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suspect Contact') ?></th>
            <td><?= h($suspect->suspect_contact) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suspect Situation Geo') ?></th>
            <td><?= h($suspect->suspect_situation_geo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suspect Sexe') ?></th>
            <td><?= h($suspect->suspect_sexe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suspect Etat') ?></th>
            <td><?= h($suspect->suspect_etat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($suspect->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($suspect->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($suspect->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suspect Date Naissance') ?></th>
            <td><?= h($suspect->suspect_date_naissance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Declaration') ?></th>
            <td><?= h($suspect->date_declaration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Heure Declaration') ?></th>
            <td><?= h($suspect->heure_declaration) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Commentaire Suspect') ?></h4>
        <?= $this->Text->autoParagraph(h($suspect->commentaire_suspect)); ?>
    </div>
    <div class="row">
        <h4><?= __('Commentaire Analyse') ?></h4>
        <?= $this->Text->autoParagraph(h($suspect->commentaire_analyse)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ligne Suspects Antecedents') ?></h4>
        <?php if (!empty($suspect->ligne_suspects_antecedents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Suspect Id') ?></th>
                <th scope="col"><?= __('Antecedent Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($suspect->ligne_suspects_antecedents as $ligneSuspectsAntecedents): ?>
            <tr>
                <td><?= h($ligneSuspectsAntecedents->suspect_id) ?></td>
                <td><?= h($ligneSuspectsAntecedents->antecedent_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'view', $ligneSuspectsAntecedents->suspect_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'edit', $ligneSuspectsAntecedents->suspect_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'delete', $ligneSuspectsAntecedents->suspect_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ligneSuspectsAntecedents->suspect_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ligne Suspects Symptomes') ?></h4>
        <?php if (!empty($suspect->ligne_suspects_symptomes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Suspect Id') ?></th>
                <th scope="col"><?= __('Symptome Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($suspect->ligne_suspects_symptomes as $ligneSuspectsSymptomes): ?>
            <tr>
                <td><?= h($ligneSuspectsSymptomes->suspect_id) ?></td>
                <td><?= h($ligneSuspectsSymptomes->symptome_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'view', $ligneSuspectsSymptomes->suspect_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'edit', $ligneSuspectsSymptomes->suspect_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'delete', $ligneSuspectsSymptomes->suspect_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ligneSuspectsSymptomes->suspect_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
