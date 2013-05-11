<?php echo $this->Form->Create('Vendor'); ?>
<?php echo $this->Form->label('Name:'); ?>
<?php echo $this->Form->text('name'); ?>
<?php echo $this->Form->error('name'); ?>
<?php echo $this->Form->label('Location:'); ?>
<?php echo $this->Form->text('location'); ?>
<?php echo $this->Form->label('Website:'); ?>
<?php echo $this->Form->text('website'); ?>
<?php echo $this->Form->error('website'); ?>
<?php echo $this->Form->label('Schedule:'); ?>
<?php echo $this->Form->select('schedule_id', $schedules); ?>
<?php echo $this->Form->error('schedule_id'); ?>
<?php echo $this->Form->label('Active:'); ?>
<?php echo $this->Form->checkbox('active', array('checked' => 'checked')); ?>
<?php echo $this->Form->submit(); ?>
<?php echo $this->Form->end(); ?>