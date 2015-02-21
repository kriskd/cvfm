<?php $this->Form->inputDefaults(array(
    'class' => 'form-control',
    'error' => [
        'attributes' => [
            'class' => 'label label-danger',
        ],
    ]
)); ?>
<?php echo $this->Form->hidden('id'); ?>
<div class="row">
    <div class="col-lg-6">
        <?php echo $this->Form->input('name'); ?>
    </div>
    <div class="col-lg-6">
        <?php echo $this->Form->input('website'); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <?php echo $this->Form->input('amount'); ?>
    </div>
    <div class="col-lg-6">
        <?php echo $this->Form->input('type', [
            'options' => $types,
            'empty' => 'Select One',
        ]); ?>
    </div>
</div>
<?php // Add logo when there is a way to upload ?>
<?php //echo $this->Form->input('logo'); ?>
<?php echo $this->Form->input('active', array(
    'class' => '',
)); ?>
