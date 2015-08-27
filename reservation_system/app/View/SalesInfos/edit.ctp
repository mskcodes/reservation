<div class="salesInfos form">
<?php echo $this->Form->create('SalesInfo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sales Info'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('ticket_id');
		echo $this->Form->input('answer_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SalesInfo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('SalesInfo.id'))); ?></li>
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
