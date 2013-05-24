<?php echo $this->Form->create('Product'); ?>
<?php echo $this->Form->label('Name:'); ?>
<?php echo $this->Form->text('name'); ?>
<?php echo $this->Form->label('Product Type:'); ?>
<?php echo $this->Form->input('product_type', array('options' => $product_types, 'empty' => '')); ?>
<?php echo $this->Form->submit(); ?>
<?php echo $this->Form->end(); ?>