<?php var_dump($customer); ?>
<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Affiliation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customer['Affiliation']['affiliation_name'], array('controller' => 'affiliations', 'action' => 'view', $customer['Affiliation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customer['Primary']['primary_name'], array('controller' => 'primaries', 'action' => 'view', $customer['Primary']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SalesInfo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($customer['Customer']['sales_info_id'], array('controller' => 'answers', 'action' => 'view', $customer['Answer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), array(), __('Are you sure you want to delete # %s?', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Infos'), array('controller' => 'sales_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Info'), array('controller' => 'sales_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Affiliations'), array('controller' => 'affiliations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliation'), array('controller' => 'affiliations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?></li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related SalesInfos'); ?></h3>
	<?php if (!empty($customer['SalesInfo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ticket Id'); ?></th>
		<th><?php echo __('Answer Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['SalesInfo'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo h($customer['ticket_id']); ?></td>
			<td><?php echo h($customer['answer_id']); ?></td>
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
			<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

