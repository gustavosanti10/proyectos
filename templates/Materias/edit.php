<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materia $materia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Materias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="materias form content">
            <?= $this->Form->create($materia) ?>
            <fieldset>
                <legend><?= __('Edit Materia') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
