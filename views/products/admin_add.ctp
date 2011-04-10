<?php echo $this->Form->create('Product'); ?>
<?php echo $this->Form->label('Name:'); ?>
<?php echo $this->Form->text('name'); ?>
<?php echo $this->Form->label('Product Type:'); ?>
<?php echo $this->Form->select('product_type', $product_types); ?>
<?php echo $this->Form->submit(); ?>
<?php echo $this->Form->end(); ?>