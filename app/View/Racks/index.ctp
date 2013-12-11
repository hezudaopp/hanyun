<div class="racks index">
	<h2><?php echo __('Racks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('operator'); ?></th>
			<th><?php echo $this->Paginator->sort('format'); ?></th>
			<th><?php echo $this->Paginator->sort('debug_price'); ?></th>
			<th><?php echo $this->Paginator->sort('bandwidth'); ?></th>
			<th><?php echo $this->Paginator->sort('bandwidth_type'); ?></th>
			<th><?php echo $this->Paginator->sort('ip_count'); ?></th>
			<th><?php echo $this->Paginator->sort('power'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($racks as $rack): ?>
	<tr>
		<td><?php echo h($rack['Rack']['id']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['name']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['operator']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['format']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['debug_price']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['bandwidth']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['bandwidth_type']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['ip_count']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['power']); ?>&nbsp;</td>
		<td><?php echo h($rack['Rack']['price']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rack['Rack']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rack['Rack']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rack['Rack']['id']), null, __('Are you sure you want to delete # %s?', $rack['Rack']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Rack'), array('action' => 'add')); ?></li>
	</ul>
</div>
