<?php echo $this->Html->link('Add another product', '/admin/products/add'); ?>
<?php echo $this->Form->create('Product'); ?>
<?php echo $this->Form->hidden('id', array('value' => $product['Product']['id'])); ?>
<?php echo $this->Form->label('Name:'); ?>
<?php echo $this->Form->text('name', array('value' => $product['Product']['name'])); ?>
<?php echo $this->Form->label('Product Type:'); ?>
<?php echo $this->Form->select('product_type', $product_types, $product['Product']['product_type']); ?>
<?php echo $this->Form->submit('Update'); ?>
<?php echo $this->Form->end(); ?>