<p><?php echo $this->Html->link('Back', '/admin/sponsors'); ?></p>
<?php echo $this->Form->create('Sponsor', array('action' => '/edit/' . $sponsor['Sponsor']['id'])); ?>
<?php echo $this->Form->hidden('id', array('value' => $sponsor['Sponsor']['id'])); ?>
<?php echo $this->Form->label('Name:'); ?>
<?php echo $this->Form->text('name', array('value' => $sponsor['Sponsor']['name'])) ?>
<?php echo $this->Form->label('Website:'); ?>
<?php echo $this->Form->text('website', array('value' => $sponsor['Sponsor']['website'])) ?>
<?php echo $this->Form->label('Amount:'); ?>
<?php echo $this->Form->text('amount', array('value' => $sponsor['Sponsor']['amount'])) ?>
<?php echo $this->Form->label('Logo file name:'); ?>
<?php echo $this->Form->text('logo', array('value' => $sponsor['Sponsor']['logo'])); ?>
<?php echo $this->Form->submit('Update'); ?>
<?php echo $this->Form->end(); ?>