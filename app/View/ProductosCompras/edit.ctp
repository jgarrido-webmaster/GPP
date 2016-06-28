<div class="productosCompras form">
<?php echo $this->Form->create('ProductosCompra'); ?>
	<fieldset>
		<legend><?php echo __('Edit Productos Compra'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('compra_id');
		echo $this->Form->input('producto_id');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductosCompra.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ProductosCompra.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Productos Compras'), array('action' => 'index')); ?></li>
	</ul>
</div>
