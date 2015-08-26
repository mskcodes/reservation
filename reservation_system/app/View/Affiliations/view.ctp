<div class="affiliations view">
<h2><?php echo __('Affiliation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($affiliation['Affiliation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Affiliation Type'); ?></dt>
		<dd>
			<?php echo h($affiliation['Affiliation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('email'); ?></dt>
		<dd>
			<?php echo h($affiliation['Affiliation']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('tel'); ?></dt>
		<dd>
			<?php echo h($affiliation['Affiliation']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Affiliation'), array('action' => 'edit', $affiliation['Affiliation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Affiliation'), array('action' => 'delete', $affiliation['Affiliation']['id']), array(), __('Are you sure you want to delete # %s?', $affiliation['Affiliation']['id'])); ?> </li>
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
	<?php if (empty($affiliation['Customer'])){
		echo __('No Data'); 
	};
	?>
	<?php if (!empty($affiliation['Customer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
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
	<?php foreach ($affiliation['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo h($affiliation['Affiliation']['name']); ?></td>
			<td><?php echo $customer['primary_id']; ?></td>
			<td><?php echo $customer['customer_name']; ?></td>
			<td><?php echo $customer['tel']; ?></td>
			<td><?php echo $customer['email']; ?></td>
			<td><?php echo $customer['answer_id']; ?></td>
			<td><?php echo $customer['created']; ?></td>
			<td><?php echo $customer['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customers', 'action' => 'view', $customer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customers', 'action' => 'edit', $customer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customers', 'action' => 'delete', $customer['id']), array(), __('Are you sure you want to delete # %s?', $customer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('List Affiliations'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
	<?php foreach ($affiliations as $affiliation): ?>
			<li><?php echo $this->Html->link(__(h($affiliation['Affiliation']['name'])), array('action' => '', $affiliation['Affiliation']['id'])); ?></li>
<?php endforeach; ?>
		</ul>
	</div>
	
</div>
