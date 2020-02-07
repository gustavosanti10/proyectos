<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profesor[]|\Cake\Collection\CollectionInterface $profesors
 */
?>
<div class="profesors index content">
    <?= $this->Html->link(__('Nuevo Profesor'), ['action' => 'add'], ['class' => 'button float-right', 'style'=>'background:#116054']) ?>
    <h3><?= __('Profesores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ci') ?></th>
                    <th><?= $this->Paginator->sort('nombres') ?></th>
                    <th><?= $this->Paginator->sort('contrato') ?></th>
                    <th><?= $this->Paginator->sort('materia_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profesors as $profesor): ?>
                <tr>
                    <td><?= $this->Number->format($profesor->id) ?></td>
                    <td><?= h($profesor->ci) ?></td>
                    <td><?= h($profesor->nombres) ?></td>
                    <td><?= h($profesor->contrato) ?></td>
                    <td><?= $profesor->has('materia') ? $this->Html->link($profesor->materia->nombre, ['controller' => 'Materias', 'action' => 'view', $profesor->materia->id]) : '' ?></td>
                    <td><?= h($profesor->created) ?></td>
                    <td><?= h($profesor->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $profesor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profesor->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profesor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profesor->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
    
</div>
