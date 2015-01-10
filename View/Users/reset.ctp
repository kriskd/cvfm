<?php echo $this->Form->create(); ?>
<?php $this->Form->inputDefaults(['class' => 'form-control']); ?>
<?php echo $this->Form->input('password', ['label' => 'New Password']); ?>
<?php echo $this->Form->input('confirm_password', ['label' => 'Repeat Password', 'type' => 'password']); ?>
<?php echo $this->Form->end(['label' => 'Save', 'class' => 'btn btn-primary']); ?>
