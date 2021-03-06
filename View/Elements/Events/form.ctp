<?php $this->Form->inputDefaults([
    'class' => 'form-control',
    'error' => [
        'attributes' => [
            'class' => 'label label-danger',
        ],
    ]
]); ?>
<div class="form-group">
    <?php echo $this->Form->input('id'); ?>
    <?php echo $this->Form->input('date_pick', array(
        'label' => 'Date',
        'type' => 'text',
        'class' => 'form-control date-picker',
        'data-date-format' => 'MM/DD/YYYY',
    )); ?>
    <?php echo $this->Form->input('date', array(
        'label' => false,
        'type' => 'hidden',
    )); ?>
</div>
<div class="form-group">
    <?php echo $this->Form->input('description'); ?>
</div>
