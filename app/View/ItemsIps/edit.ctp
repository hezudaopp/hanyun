<div class="itemsIps form">
<?php echo $this->Form->create('ItemsIp'); ?>
	<fieldset>
		<legend><?php echo __('Edit Items Ip'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('ip_id');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php echo $this->element('action_server'); ?>