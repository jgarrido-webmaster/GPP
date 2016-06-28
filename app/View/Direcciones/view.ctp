<div class="direcciones view">
<h2><?php echo __('Direccion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($direccion['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $direccion['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['ciudad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['region']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($direccion['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $direccion['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($direccion['Direccion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Direccion'), array('action' => 'edit', $direccion['Direccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Direccion'), array('action' => 'delete', $direccion['Direccion']['id']), array(), __('Are you sure you want to delete # %s?', $direccion['Direccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Direcciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Direccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
