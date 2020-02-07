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
            <?= $this->Html->link(__('Edit Profesor'), ['action' => 'edit', $profesor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Profesor'), ['action' => 'delete', $profesor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Profesors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Profesor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profesors view content">
            <h3><?= h($profesor->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ci') ?></th>
                    <td><?= h($profesor->ci) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombres') ?></th>
                    <td><?= h($profesor->nombres) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contrato') ?></th>
                    <td><?= h($profesor->contrato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Materia') ?></th>
                    <td><?= $profesor->has('materia') ? $this->Html->link($profesor->materia->nombre, ['controller' => 'Materias', 'action' => 'view', $profesor->materia->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($profesor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($profesor->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($profesor->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
