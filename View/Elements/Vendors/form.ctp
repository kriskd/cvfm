<?php echo $this->Form->create('Vendor'); ?>
<?php $this->Form->inputDefaults(array(
    'class' => 'form-control',
)); ?>
<?php echo $this->Form->hidden('id'); ?>
<div class="basic-info">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php echo $this->Form->input('name'); ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php echo $this->Form->input('business_name'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php echo $this->Form->input('location'); ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php echo $this->Form->input('website'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php echo $this->Form->input('schedule_id', array('options' => $schedules)); ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php echo $this->Form->input('active', isset($options) ? $options : array()); ?>
        </div>
    </div>
</div>
<?php echo $this->Element('Vendors/product_accordion', compact('groupedProducts')); ?>
<?php echo $this->Form->submit('Save vendor'); ?>
<?php echo $this->Form->end(); ?>
