<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo Registro'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="registros index large-9 medium-8 columns content">
    <h3><?= __('Registros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                                <th scope="col"><?= $this->Paginator->sort('n_empleado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pasos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distancia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('create') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>-->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro): ?>
            <tr>
                <td><?= $this->Number->format($registro->n_empleado) ?></td>
                <td><?= h($registro->nombre) ?></td>
                <td><?= $this->Number->format($registro->pasos) ?></td>
                <td><?= h($registro->pasos*.75) ?></td>
                <td><?= h($registro->fecha) ?></td>
                <!--<td><?= h($registro->create) ?></td>
                <td><?= h($registro->modified) ?></td>-->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $registro->id_registro]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registro->id_registro]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registro->id_registro], ['confirm' => __('Are you sure you want to delete # {0}?', $registro->id_registro)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
