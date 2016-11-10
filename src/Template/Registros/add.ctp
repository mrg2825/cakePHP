<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista Registros'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="registros form large-9 medium-8 columns content">
    <?= $this->Form->create($registro) ?>
    <fieldset>
        <legend><?= __('Add Registro') ?></legend>
        <?php
            
            echo $this->Form->input('n_empleado');
            echo $this->Form->input('nombre');
            echo $this->Form->input('pasos');
            echo $this->Form->input('fecha');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Registrar')) ?>
    <?= $this->Form->end() ?>
</div>
