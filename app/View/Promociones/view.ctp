<div class="promociones view">
<h2><?php echo __('Promocion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($promocion['Promocion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($promocion['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $promocion['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($promocion['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $promocion['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($promocion['Promocion']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($promocion['Promocion']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($promocion['Promocion']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo h($promocion['Promocion']['stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($promocion['Promocion']['activo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desde'); ?></dt>
		<dd>
			<?php echo h($promocion['Promocion']['desde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hasta'); ?></dt>
		<dd>
			<?php echo h($promocion['Promocion']['hasta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
			<?php echo h($promocion['Promocion']['documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($promocion['Promocion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($promocion['Promocion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Promocion'), array('action' => 'edit', $promocion['Promocion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Promocion'), array('action' => 'delete', $promocion['Promocion']['id']), array(), __('Are you sure you want to delete # %s?', $promocion['Promocion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Promociones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Promocion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
