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
            <?= $this->Html->link(__('Edit Materia'), ['action' => 'edit', $materia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Materia'), ['action' => 'delete', $materia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Materias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Materia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="materias view content">
            <h3><?= h($materia->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($materia->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($materia->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($materia->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($materia->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($materia->modified) ?></td>
                </tr>
            </table>
            
                <h4><?= __('Related Profesors') ?></h4>
                <?php if (!empty($materia->profesors)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Ci') ?></th>
                            <th><?= __('Nombres') ?></th>
                            <th><?= __('Contrato') ?></th>
                            <th><?= __('Materia Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($materia->profesors as $profesors) : ?>
                        <tr>
                            <td><?= h($profesors->id) ?></td>
                            <td><?= h($profesors->ci) ?></td>
                            <td><?= h($profesors->nombres) ?></td>
                            <td><?= h($profesors->contrato) ?></td>
                            <td><?= h($profesors->materia_id) ?></td>
                            <td><?= h($profesors->created) ?></td>
                            <td><?= h($profesors->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Profesors', 'action' => 'view', $profesors->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Profesors', 'action' => 'edit', $profesors->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profesors', 'action' => 'delete', $profesors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profesors->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>
