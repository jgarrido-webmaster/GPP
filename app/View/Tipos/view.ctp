<div class="tipos view">
<h2><?php echo __('Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['rol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tipo['Tipo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo'), array('action' => 'edit', $tipo['Tipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo'), array('action' => 'delete', $tipo['Tipo']['id']), array(), __('Are you sure you want to delete # %s?', $tipo['Tipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($tipo['Usuario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo __('FormaPago'); ?></th>
		<th><?php echo __('Rut'); ?></th>
		<th><?php echo __('Especialidad'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipo['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['id']; ?></td>
			<td><?php echo $usuario['username']; ?></td>
			<td><?php echo $usuario['password']; ?></td>
			<td><?php echo $usuario['nombre']; ?></td>
			<td><?php echo $usuario['apellidos']; ?></td>
			<td><?php echo $usuario['telefono']; ?></td>
			<td><?php echo $usuario['tipo_id']; ?></td>
			<td><?php echo $usuario['cargo']; ?></td>
			<td><?php echo $usuario['formaPago']; ?></td>
			<td><?php echo $usuario['rut']; ?></td>
			<td><?php echo $usuario['especialidad']; ?></td>
			<td><?php echo $usuario['created']; ?></td>
			<td><?php echo $usuario['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), array(), __('Are you sure you want to delete # %s?', $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
