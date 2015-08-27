<?php
	//var_dump($salesInfos);
	//var_dump($total);
	  ?>
<div class="salesInfos index">
	<h2><?php echo __('Sales Infos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ticket_id'); ?></th>
			<th><?php echo $this->Paginator->sort('answer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($salesInfos as $salesInfo): ?>
	<tr>
		<td><?php echo h($salesInfo['SalesInfo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($salesInfo['Customer']['customer_name'], array('controller' => 'customers', 'action' => 'view', $salesInfo['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($salesInfo['Ticket']['ticket_name'], array('controller' => 'tickets', 'action' => 'view', $salesInfo['Ticket']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($salesInfo['Answer']['answer_name'], array('controller' => 'answers', 'action' => 'view', $salesInfo['Answer']['id'])); ?>
		</td>
		<td><?php echo h($salesInfo['SalesInfo']['created']); ?>&nbsp;</td>
		<td><?php echo h($salesInfo['SalesInfo']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $salesInfo['SalesInfo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $salesInfo['SalesInfo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $salesInfo['SalesInfo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $salesInfo['SalesInfo']['id']))); ?>
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
