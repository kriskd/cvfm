<div class="admin events form">
<fieldset>
    <legend><?php echo __('Admin Add Event'); ?></legend>
    <?php echo $this->Element('Events/form'); ?>
</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
	</ul>
</div>
