<div class="itemsIps view">
<h2><?php  echo __('Items Ip'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemsIp['ItemsIp']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsIp['Item']['name'], array('controller' => 'items', 'action' => 'view', $itemsIp['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsIp['Ip']['name'], array('controller' => 'ips', 'action' => 'view', $itemsIp['Ip']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($itemsIp['ItemsIp']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('action_server'); ?>
