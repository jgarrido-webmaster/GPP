<div class="compras view">
<h2><?php echo __('Compra'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($compra['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $compra['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($compra['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $compra['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neto'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['neto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descuento'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['descuento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FormaPago'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['formaPago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aprobado'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['aprobado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($compra['Compra']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Compra'), array('action' => 'edit', $compra['Compra']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Compra'), array('action' => 'delete', $compra['Compra']['id']), array(), __('Are you sure you want to delete # %s?', $compra['Compra']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($compra['Producto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Sku'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($compra['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['id']; ?></td>
			<td><?php echo $producto['item']; ?></td>
			<td><?php echo $producto['descripcion']; ?></td>
			<td><?php echo $producto['sku']; ?></td>
			<td><?php echo $producto['codigo']; ?></td>
			<td><?php echo $producto['stock']; ?></td>
			<td><?php echo $producto['precio']; ?></td>
			<td><?php echo $producto['usuario_id']; ?></td>
			<td><?php echo $producto['activo']; ?></td>
			<td><?php echo $producto['created']; ?></td>
			<td><?php echo $producto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos', 'action' => 'edit', $producto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos', 'action' => 'delete', $producto['id']), array(), __('Are you sure you want to delete # %s?', $producto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
