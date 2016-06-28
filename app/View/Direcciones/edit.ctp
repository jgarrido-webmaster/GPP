<div class="direcciones form">
<?php echo $this->Form->create('Direccion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Direccion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('direccion');
		echo $this->Form->input('ciudad');
		echo $this->Form->input('region');
		echo $this->Form->input('usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Direccion.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Direccion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Direcciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
