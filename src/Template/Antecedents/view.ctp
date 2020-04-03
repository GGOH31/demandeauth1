<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Antecedent $antecedent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Antecedent'), ['action' => 'edit', $antecedent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Antecedent'), ['action' => 'delete', $antecedent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $antecedent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Antecedents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Antecedent'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ligne Suspects Antecedents'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ligne Suspects Antecedent'), ['controller' => 'LigneSuspectsAntecedents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="antecedents view large-9 medium-8 columns content">
    <h3><?= h($antecedent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($antecedent->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($antecedent->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($antecedent->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ligne Suspects Antecedents') ?></h4>
        <?php if (!empty($antecedent->ligne_suspects_antecedents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Suspect Id') ?></th>
                <th scope="col"><?= __('Antecedent Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($antecedent->ligne_suspects_antecedents as $ligneSuspectsAntecedents): ?>
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
</div>
