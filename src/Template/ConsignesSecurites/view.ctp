<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConsignesSecurite $consignesSecurite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Consignes Securite'), ['action' => 'edit', $consignesSecurite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Consignes Securite'), ['action' => 'delete', $consignesSecurite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consignesSecurite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consignes Securites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consignes Securite'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consignesSecurites view large-9 medium-8 columns content">
    <h3><?= h($consignesSecurite->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Consigne') ?></th>
            <td><?= h($consignesSecurite->consigne) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url Image') ?></th>
            <td><?= h($consignesSecurite->url_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consignesSecurite->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($consignesSecurite->description)); ?>
    </div>
</div>
