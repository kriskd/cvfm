<div class="admin events edit">
    <div class="buttons">
        <?php echo $this->Html->link('Back', [
            'action' => 'index',
            'admin' => true,    
        ],[
            'class' => 'btn btn-info',
        ]); ?>
        <?php echo $this->Html->link('Delete Event', [
                'controller' => 'events',
                'action' => 'modal', $event['Event']['id'],
                'admin' => true,
            ],[
                'class' => 'pull-right delete-modal btn btn-danger',
                'data-id' => $event['Event']['id'],
                'data-name' => $event['Event']['description'],
        ]); ?>
    </div>
    <?php echo $this->Form->create('Event'); ?>
    <?php echo $this->Element('Events/form'); ?>
    <?php echo $this->Form->end(['label' => __('Save'), 'class' => 'btn btn-primary']); ?>
</div>
