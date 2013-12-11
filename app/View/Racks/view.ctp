<div class="racks view">
<h2><?php  echo __('Rack'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operator'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['operator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Format'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['format']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Debug Price'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['debug_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bandwidth'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['bandwidth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bandwidth Type'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['bandwidth_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip Count'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['ip_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Power'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['power']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($rack['Rack']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rack'), array('action' => 'edit', $rack['Rack']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rack'), array('action' => 'delete', $rack['Rack']['id']), null, __('Are you sure you want to delete # %s?', $rack['Rack']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Racks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rack'), array('action' => 'add')); ?> </li>
	</ul>
</div>
