<div class="admin events form">
<?php echo $this->Form->create('Event'); ?>
<?php $this->Form->inputDefaults([
    'class' => 'form-control',
]); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Event'); ?></legend>
        <div class="form-group">
            <?php echo $this->Form->input('date_pick', array(
                'label' => 'Date',
                'type' => 'text',
                'class' => 'form-control date-picker',
                'data-date-format' => 'MM/DD/YYYY',
            )); ?>
            <?php echo $this->Form->input('date', array(
                'label' => false,
                'type' => 'hidden',
            )); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('description'); ?>
        </div>
	</fieldset>
<?php echo $this->Form->end(['label' => __('Submit'), 'class' => 'btn btn-primary']); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
	</ul>
</div>
