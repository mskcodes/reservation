<div class="tickets index">
	<h2><?php echo __('Tickets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ticket_name'); ?></th>
			<th><?php echo $this->Paginator->sort('stock'); ?></th>
			<th><?php echo $this->Paginator->sort(__('customer_count')); ?></th>
			<th><?php echo $this->Paginator->sort(__('sales_info')); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tickets as $ticket): ?>
	<tr>
		<td><?php echo h($ticket['Ticket']['id']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['ticket_name']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['stock']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['customer_count']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['sales_info']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['created']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('controller' => 'customers' , 'action' => 'ticket_view', $ticket['Ticket']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ticket['Ticket']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ticket['Ticket']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ticket['Ticket']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
