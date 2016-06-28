<div class="productosCompras view">
<h2><?php echo __('Productos Compra'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productosCompra['ProductosCompra']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Compra Id'); ?></dt>
		<dd>
			<?php echo h($productosCompra['ProductosCompra']['compra_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto Id'); ?></dt>
		<dd>
			<?php echo h($productosCompra['ProductosCompra']['producto_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($productosCompra['ProductosCompra']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($productosCompra['ProductosCompra']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productosCompra['ProductosCompra']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productosCompra['ProductosCompra']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Productos Compra'), array('action' => 'edit', $productosCompra['ProductosCompra']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Productos Compra'), array('action' => 'delete', $productosCompra['ProductosCompra']['id']), array(), __('Are you sure you want to delete # %s?', $productosCompra['ProductosCompra']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos Compras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productos Compra'), array('action' => 'add')); ?> </li>
	</ul>
</div>
