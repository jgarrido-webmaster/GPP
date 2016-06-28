<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('empresa');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('rut');
		echo $this->Form->input('razonSocial');
		echo $this->Form->input('giro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cliente.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cliente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Direcciones'), array('controller' => 'direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Direccion'), array('controller' => 'direcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
