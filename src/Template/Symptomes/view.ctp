<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Symptome $symptome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Symptome'), ['action' => 'edit', $symptome->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Symptome'), ['action' => 'delete', $symptome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $symptome->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Symptomes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Symptome'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ligne Suspects Symptomes'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ligne Suspects Symptome'), ['controller' => 'LigneSuspectsSymptomes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="symptomes view large-9 medium-8 columns content">
    <h3><?= h($symptome->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($symptome->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($symptome->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($symptome->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ligne Suspects Symptomes') ?></h4>
        <?php if (!empty($symptome->ligne_suspects_symptomes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Suspect Id') ?></th>
                <th scope="col"><?= __('Symptome Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($symptome->ligne_suspects_symptomes as $ligneSuspectsSymptomes): ?>
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
