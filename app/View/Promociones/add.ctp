<div class="promociones form">
<?php echo $this->Form->create('Promocion'); ?>
	<fieldset>
		<legend><?php echo __('Add Promocion'); ?></legend>
	<?php
		echo $this->Form->input('producto_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('precio');
		echo $this->Form->input('stock');
		echo $this->Form->input('activo');
		echo $this->Form->input('desde');
		echo $this->Form->input('hasta');
		echo $this->Form->input('documento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Promociones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
