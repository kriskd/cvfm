<div class="admin staffs edit">
    <div class="buttons">
        <?php echo $this->Html->link('Back', [
            'action' => 'index',
            'admin' => true,    
        ],[
            'class' => 'btn btn-info',
        ]); ?>
        <?php echo $this->Html->link('Delete Staff', [
                'action' => 'modal', $staff['Staff']['id'],
                'admin' => true,
            ],[
                'class' => 'pull-right delete-modal btn btn-danger',
                'data-id' => $staff['Staff']['id'],
                'data-name' => $staff['Staff']['display_name'],
        ]); ?>
    </div>
    <?php echo $this->Form->create('Staff'); ?>
    <?php echo $this->Element('Staffs/form'); ?>
    <?php echo $this->Form->end(['label' => __('Save'), 'class' => 'btn btn-primary']); ?>
</div>
