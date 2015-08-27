<div class="salesInfos view">
<h2><?php echo __('Sales Info'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($salesInfo['SalesInfo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesInfo['Customer']['customer_name'], array('controller' => 'customers', 'action' => 'view', $salesInfo['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ticket'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesInfo['Ticket']['ticket_name'], array('controller' => 'tickets', 'action' => 'view', $salesInfo['Ticket']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($salesInfo['Answer']['answer_name'], array('controller' => 'answers', 'action' => 'view', $salesInfo['Answer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($salesInfo['SalesInfo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($salesInfo['SalesInfo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sales Info'), array('action' => 'edit', $salesInfo['SalesInfo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sales Info'), array('action' => 'delete', $salesInfo['SalesInfo']['id']), array(), __('Are you sure you want to delete # %s?', $salesInfo['SalesInfo']['id'])); ?> </li>
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
	<h3><?php echo __('Related Answers'); ?></h3>
	<?php if (!empty($salesInfo['Answer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Answer Name'); ?></th>
		<th><?php echo __('Sales Info Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($salesInfo['Answer'] as $answer): ?>
		<tr>
			<td><?php echo $answer['id']; ?></td>
			<td><?php echo $answer['answer_name']; ?></td>
			<td><?php echo $answer['sales_info_id']; ?></td>
			<td><?php echo $answer['created']; ?></td>
			<td><?php echo $answer['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'answers', 'action' => 'view', $answer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'answers', 'action' => 'edit', $answer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'answers', 'action' => 'delete', $answer['id']), array(), __('Are you sure you want to delete # %s?', $answer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($salesInfo['Customer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Affiliation Id'); ?></th>
		<th><?php echo __('Primary Id'); ?></th>
		<th><?php echo __('Customer Name'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Sales Info Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($salesInfo['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['affiliation_id']; ?></td>
			<td><?php echo $customer['primary_id']; ?></td>
			<td><?php echo $customer['customer_name']; ?></td>
			<td><?php echo $customer['tel']; ?></td>
			<td><?php echo $customer['email']; ?></td>
			<td><?php echo $customer['sales_info_id']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Tickets'); ?></h3>
	<?php if (!empty($salesInfo['Ticket'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ticket Name'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th><?php echo __('Customer Count'); ?></th>
		<th><?php echo __('Sales Info Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($salesInfo['Ticket'] as $ticket): ?>
		<tr>
			<td><?php echo $ticket['id']; ?></td>
			<td><?php echo $ticket['ticket_name']; ?></td>
			<td><?php echo $ticket['stock']; ?></td>
			<td><?php echo $ticket['customer_count']; ?></td>
			<td><?php echo $ticket['sales_info_id']; ?></td>
			<td><?php echo $ticket['created']; ?></td>
			<td><?php echo $ticket['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tickets', 'action' => 'view', $ticket['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tickets', 'action' => 'edit', $ticket['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tickets', 'action' => 'delete', $ticket['id']), array(), __('Are you sure you want to delete # %s?', $ticket['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
