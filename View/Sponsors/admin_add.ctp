<?php echo $this->Form->Create('Sponsor'); ?>
<?php echo $this->Form->label('Name:'); ?>
<?php echo $this->Form->text('name'); ?>
<?php echo $this->Form->error('name'); ?>
<?php echo $this->Form->label('Website:'); ?>
<?php echo $this->Form->text('website'); ?>
<?php echo $this->Form->error('website'); ?>
<?php echo $this->Form->label('Amount:'); ?>
<?php echo $this->Form->text('amount'); ?>
<?php echo $this->Form->label('Logo file:'); ?>
<?php echo $this->Form->text('logo'); ?>
<?php echo $this->Form->submit(); ?>
<?php echo $this->Form->end(); ?>