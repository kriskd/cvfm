<?php $this->Form->inputDefaults([
    'class' => 'form-control',
]); ?>
    <?php echo $this->Form->input('id'); ?>
<div class="form-group">
    <?php echo $this->Form->input('last_name', array(
        'class' => 'form-control',
    )); ?>
</div>
<div class="form-group">
    <?php echo $this->Form->input('first_name', array(
        'class' => 'form-control',
    )); ?>
</div>
<div class="form-group">
    <?php echo $this->Form->input('role', array(
        'options' => $options,
        'empty' => 'Choose One',
    )); ?>
</div>
