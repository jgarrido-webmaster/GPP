<div class="productosCompras index">
	<h2><?php echo __('Productos Compras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('compra_id'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productosCompras as $productosCompra): ?>
	<tr>
		<td><?php echo h($productosCompra['ProductosCompra']['id']); ?>&nbsp;</td>
		<td><?php echo h($productosCompra['ProductosCompra']['compra_id']); ?>&nbsp;</td>
		<td><?php echo h($productosCompra['ProductosCompra']['producto_id']); ?>&nbsp;</td>
		<td><?php echo h($productosCompra['ProductosCompra']['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($productosCompra['ProductosCompra']['total']); ?>&nbsp;</td>
		<td><?php echo h($productosCompra['ProductosCompra']['created']); ?>&nbsp;</td>
		<td><?php echo h($productosCompra['ProductosCompra']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productosCompra['ProductosCompra']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productosCompra['ProductosCompra']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productosCompra['ProductosCompra']['id']), array(), __('Are you sure you want to delete # %s?', $productosCompra['ProductosCompra']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Productos Compra'), array('action' => 'add')); ?></li>
	</ul>
</div>
