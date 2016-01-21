<div class="answer view">
<h2><?php echo __('Answer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ticket Id'); ?></dt>
		<dd>
			<?php echo h($answer['Ticket']['ticket_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer Name'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['answer_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Answer'), array('controller' => 'answers', 'action' => 'edit', $answer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Answer'), array('controller' => 'answers', 'action' => 'delete', $answer['Answer']['id']), array(), __('Are you sure you want to delete # %s?', $answer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales Infos'), array('controller' => 'sales_infos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sales Info'), array('controller' => 'sales_infos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'custanswers', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Affiliations'), array('controller' => 'affiliations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Affiliation'), array('controller' => 'affiliations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tickets'), array('controller' => 'tickets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket'), array('controller' => 'tickets', 'action' => 'add')); ?></li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($answers)): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Affiliation Id'); ?></th>
		<th><?php echo __('Primary Id'); ?></th>
		<th><?php echo __('Customer Name'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Sales Created'); ?></th>
		<th><?php echo __('SalesModified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($answers as $answer): ?>
		<tr>
			<td><?php echo $answer['Customer']['id']; ?></td>
			<td><?php echo h($answer['Customer']['Affiliation']['affiliation_name']); ?></td>
			<td><?php echo h($answer['Customer']['Primary']['primary_name']); ?></td>
			<td><?php echo $answer['Customer']['customer_name']; ?></td>
			<td><?php echo $answer['Customer']['tel']; ?></td>
			<td><?php echo $answer['Customer']['email']; ?></td>
			<td><?php echo $answer['SalesInfo']['created']; ?></td>
			<td><?php echo $answer['SalesInfo']['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customers', 'action' => 'view', $answer['Customer']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customers', 'action' => 'edit', $answer['Customer']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customers', 'action' => 'delete', $answer['Customer']['id']), array(), __('Are you sure you want to delete # %s?', $answer['Customer']['id'])); ?>
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
