<div class="vendors add">
    <?php echo $this->Form->create(); ?>
    <?php $this->Form->inputDefaults(array('class' => 'form-control')); ?>
    <?php echo $this->Form->input('name', array('label' => 'Proprietor\'s Name')); ?>
    <?php echo $this->Form->input('business_name'); ?>
    <?php echo $this->Form->input('address'); ?>
    <?php echo $this->Form->input('city'); ?>
    <?php echo $this->Form->input('state', array('options' => $states, 'selected' => 'WI')); ?>
    <?php echo $this->Form->input('postal_code'); ?>
    <?php echo $this->Form->input('ebt', array('label' => 'Can you accept EBT/Food Share/WIC', 'class' => '')); ?>
    <?php echo $this->Form->input('description'); ?>
    <?php echo $this->Form->input('schedule_id', array('options' => $schedules)); ?>
    <?php echo $this->Form->input('organize', array('label' => 'I would like to help organize a special event', 'class' => '')); ?>
    <?php echo $this->Form->input('donate', array('label' => 'I would like to donate something to a special event', 'class' => '')); ?>
    <?php echo $this->Form->input('comments', array('label' => 'Comments/Suggestions')); ?>
    <?php echo $this->Form->input('agree', array('label' => 'I have read the rules and bylaws and agree to them.', 'class' => '')); ?>
    <?php echo $this->Form->end(); ?>
</div>