<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConsignesSecurite $consignesSecurite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $consignesSecurite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $consignesSecurite->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Consignes Securites'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="consignesSecurites form large-9 medium-8 columns content">
    <?= $this->Form->create($consignesSecurite) ?>
    <fieldset>
        <legend><?= __('Edit Consignes Securite') ?></legend>
        <?php
            echo $this->Form->control('consigne');
            echo $this->Form->control('description');
            echo $this->Form->control('url_image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
