<p><?php echo $this->Html->link('Back', '/admin/sponsors'); ?></p>
<?php echo $this->Form->create('Sponsor'); ?>
<?php echo $this->Element('Sponsors/form_fields'); ?>
<?php echo $this->Form->submit('Update'); ?>
<?php echo $this->Form->end(); ?>
