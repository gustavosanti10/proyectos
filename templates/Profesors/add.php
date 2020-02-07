<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profesor $profesor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Profesors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profesors form content">
            <?= $this->Form->create($profesor) ?>
            <fieldset>
                <legend><?= __('Add Profesor') ?></legend>
                <?php
                    echo $this->Form->control('ci');
                    echo $this->Form->control('nombres');
                    //echo $this->Form->control('contrato');
                    echo $this->Form->control('contrato', ['options' => ['Tiempo Completo' => 'Tiempo Completo', 'Por Horas' => 'Por Horas']]); //<==
                    echo $this->Form->control('materia_id', ['options' => $materias]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
