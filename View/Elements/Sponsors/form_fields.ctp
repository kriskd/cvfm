<?php $this->Form->inputDefaults(array(
    'class' => 'form-control'
)); ?>
<?php echo $this->Form->hidden('id'); ?>
<?php echo $this->Form->input('name'); ?>
<?php echo $this->Form->input('website'); ?>
<?php echo $this->Form->input('amount'); ?>
<?php // Add logo when there is a way to upload ?>
<?php //echo $this->Form->input('logo'); ?>
<?php echo $this->Form->input('active', array(
    'class' => '',
)); ?>
