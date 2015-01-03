<div class="admin events edit">
    <?php echo $this->Form->postLink('Delete Event', array(
        'action' => 'delete', $event['Event']['id'], 
        'admin' => true,
    ), array(
        'class' => 'confirm btn btn-danger',
    )); ?>
    <?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Event'); ?></legend>
        <?php echo $this->Element('Events/form'); ?>
	</fieldset>
</div>
