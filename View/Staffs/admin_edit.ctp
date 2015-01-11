<div class="admin staffs edit">
    <div class="buttons">
        <?php echo $this->Html->link('Back', [
            'action' => 'index',
            'admin' => true,    
        ],[
            'class' => 'btn btn-info',
        ]); ?>
        <?php echo $this->Form->postLink('Delete Staff', array(
            'action' => 'delete', $staff['Staff']['id'], 
            'admin' => true,
        ), array(
            'class' => 'pull-right confirm btn btn-danger',
        )); ?>
    </div>
    <?php echo $this->Form->create('Staff'); ?>
    <?php echo $this->Element('Staffs/form'); ?>
    <?php echo $this->Form->end(['label' => __('Save'), 'class' => 'btn btn-primary']); ?>
</div>
