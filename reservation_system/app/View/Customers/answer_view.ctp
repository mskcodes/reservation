<div class="answer view">
<h2><?php echo __('Answer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Answer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($customer['Answer']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Answer'), array('controller' => 'answers', 'action' => 'edit', $customer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Answer'), array('controller' => 'answers', 'action' => 'delete', $customer['Answer']['id']), array(), __('Are you sure you want to delete # %s?', $customer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Affiliations'), array('controller' => 'affiliations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliation'), array('controller' => 'affiliations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?></li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($customers)): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ticket Id'); ?></th>
		<th><?php echo __('Affiliation Id'); ?></th>
		<th><?php echo __('Primary Id'); ?></th>
		<th><?php echo __('Customer Name'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Answer Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customers as $customer): ?>
		<tr>
			<td><?php echo $customer['Customer']['id']; ?></td>
			<td><?php echo h($customer['Ticket']['name']); ?></td>
			<td><?php echo h($customer['Affiliation']['name']); ?></td>
			<td><?php echo h($customer['Primary']['name']); ?></td>
			<td><?php echo $customer['Customer']['customer_name']; ?></td>
			<td><?php echo $customer['Customer']['tel']; ?></td>
			<td><?php echo $customer['Customer']['email']; ?></td>
			<td><?php echo h($customer['Answer']['name']); ?></td>
			<td><?php echo $customer['Customer']['created']; ?></td>
			<td><?php echo $customer['Customer']['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customers', 'action' => 'view', $customer['Customer']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customers', 'action' => 'edit', $customer['Customer']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customers', 'action' => 'delete', $customer['Customer']['id']), array(), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
