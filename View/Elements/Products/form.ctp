<?php echo $this->Form->create('Product'); ?>
<?php $this->Form->inputDefaults(array(
    'class' => 'form-control',
)); ?>
<?php echo $this->Form->hidden('id'); ?>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <?php echo $this->Form->input('name', array('label' => 'Product Name')); ?>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
            <?php echo $this->Form->input('product_type', array('options' => $product_types, 'empty' => 'Choose One')); ?>
        </div>
    </div>
</div>
<div class="form-group">
    <?php echo $this->Form->label('Months in Season'); ?>
    <?php echo $this->Form->input('Month', array(
        'type' => 'select',
        'multiple' => 'checkbox',
        'options' => $months,
        'div' => 'product-months',
        'hiddenField' => false,
        'label' => false,
    )); ?>         
</div>
<?php echo $this->Form->end(['label' => 'Update', 'class' => 'btn btn-primary']); ?>
