<div class="compras form">
<?php echo $this->Form->create('Compra'); ?>
	<fieldset>
		<legend><?php echo __('Add Compra'); ?></legend>
	<?php
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('neto');
		echo $this->Form->input('descuento');
		echo $this->Form->input('total');
		echo $this->Form->input('formaPago');
		echo $this->Form->input('documento');
		echo $this->Form->input('aprobado');
		echo $this->Form->input('Producto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Compras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
