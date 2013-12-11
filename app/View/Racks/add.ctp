<div class="racks form">
<?php echo $this->Form->create('Rack'); ?>
	<fieldset>
		<legend><?php echo __('Add Rack'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('operator');
		echo $this->Form->input('format');
		echo $this->Form->input('debug_price');
		echo $this->Form->input('bandwidth');
		echo $this->Form->input('bandwidth_type');
		echo $this->Form->input('ip_count');
		echo $this->Form->input('power');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Racks'), array('action' => 'index')); ?></li>
	</ul>
</div>
