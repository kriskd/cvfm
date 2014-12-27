<?php echo $this->Form->create('Product'); ?>
<?php $this->Form->inputDefaults(array(
    'class' => 'form-control',
)); ?>
<?php echo $this->Form->hidden('id'); ?>
<?php echo $this->Form->input('name', array('label' => 'Product Name')); ?>
<?php echo $this->Form->input('product_type', array('options' => $product_types, 'empty' => 'Choose One')); ?>
<?php echo $this->Form->input('Month', array(
    'type' => 'select',
    'multiple' => 'checkbox',
    'options' => $months,
    'label' => 'Months in Season',
)); ?>         
<?php echo $this->Form->submit('Update'); ?>
<?php echo $this->Form->end(); ?>
