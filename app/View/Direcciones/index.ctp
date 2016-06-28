<div class="direcciones index">
	<h2><?php echo __('Direcciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad'); ?></th>
			<th><?php echo $this->Paginator->sort('region'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($direcciones as $direccion): ?>
	<tr>
		<td><?php echo h($direccion['Direccion']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($direccion['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $direccion['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($direccion['Direccion']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($direccion['Direccion']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($direccion['Direccion']['ciudad']); ?>&nbsp;</td>
		<td><?php echo h($direccion['Direccion']['region']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($direccion['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $direccion['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($direccion['Direccion']['created']); ?>&nbsp;</td>
		<td><?php echo h($direccion['Direccion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $direccion['Direccion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $direccion['Direccion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $direccion['Direccion']['id']), array(), __('Are you sure you want to delete # %s?', $direccion['Direccion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Direccion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
