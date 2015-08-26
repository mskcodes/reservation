
<div class="customers index">
	<h2><?php echo __('Customers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('affiliation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('primary_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_name'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('ticket_id'); ?></th>
			<th><?php echo $this->Paginator->sort('answer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($customers as $customer): ?>
	<tr>
		<td><?php echo h($customer['Customer']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customer['Affiliation']['name'], array('controller' => 'customers', 'action' => 'affiliation_view', $customer['Affiliation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($customer['Primary']['name'], array('controller' => 'primaries', 'action' => 'view', $customer['Primary']['id'])); ?>
		</td>
		<td><?php echo h($customer['Customer']['customer_name']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['tel']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customer['Ticket']['name'], array('controller' => 'customers', 'action' => 'ticket_view', $customer['Ticket']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($customer['Answer']['name'], array('controller' => 'customers', 'action' => 'answer_view', $customer['Answer']['id'])); ?>
		</td>
		<td><?php echo h($customer['Customer']['created']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $customer['Customer']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
		<?php echo $this->Form->create('serch_tickets'); ?>
		<?php
			echo $this->Form->input(__('serch_tickets'), array(
					'action' => '',
					'type' => 'select', 
					'options' => $select,
				));
			echo $this->Form->end(__('Submit'));
		?>
	<dl>
		<dt><?php echo __('Join Total'); ?></dt>
		<dd><?php echo $serch_answer2; ?></dd>
		<dt><?php echo __('UnJoin Total'); ?></dt>
		<dd><?php echo $serch_answer3; ?></dd>
		<dt><?php echo __('Un Total'); ?></dt>
		<dd><?php echo $serch_answer1; ?></dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd><?php echo $serch_total; ?></dd>
	</dl>

	</tbody>
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
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Affiliations'), array('controller' => 'affiliations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliation'), array('controller' => 'affiliations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?></li>
	</ul>
</div>
