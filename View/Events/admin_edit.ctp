<div class="admin events edit">
    <?php echo $this->Form->create('Event'); ?>
	<fieldset>
        <legend>
            <?php echo __('Edit Event'); ?>
            <div class="buttons pull-right">
                <?php echo $this->Form->postLink('Delete Event', array(
                    'action' => 'delete', $event['Event']['id'], 
                    'admin' => true,
                ), array(
                    'class' => 'confirm btn btn-danger',
                )); ?>
            </div>
        </legend>
        <?php echo $this->Element('Events/form'); ?>
        <?php echo $this->Form->end(['label' => __('Save'), 'class' => 'btn btn-primary']); ?>
	</fieldset>
</div>
