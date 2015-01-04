<div class="admin events edit">
    <div class="buttons">
        <?php echo $this->Html->link('Back', [
            'action' => 'index',
            'admin' => true,    
        ],[
            'class' => 'btn btn-info',
        ]); ?>
        <?php echo $this->Form->postLink('Delete Event', array(
            'action' => 'delete', $event['Event']['id'], 
            'admin' => true,
        ), array(
            'class' => 'pull-right confirm btn btn-danger',
        )); ?>
    </div>
    <?php echo $this->Form->create('Event'); ?>
    <?php echo $this->Element('Events/form'); ?>
    <?php echo $this->Form->end(['label' => __('Save'), 'class' => 'btn btn-primary']); ?>
</div>
