<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Producto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('sku');
		echo $this->Form->input('codigo');
		echo $this->Form->input('stock');
		echo $this->Form->input('precio');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('activo');
		echo $this->Form->input('Compra');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Producto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Producto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Promociones'), array('controller' => 'promociones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promocion'), array('controller' => 'promociones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
	</ul>
</div>
