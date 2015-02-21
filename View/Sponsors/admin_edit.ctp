<div class="admin sponsors edit">
    <div class="buttons">
        <?php echo $this->Html->link('Back', [
            'action' => 'index',
            'admin' => true,    
        ],[
            'class' => 'btn btn-info',
        ]); ?>
        <?php echo $this->Html->link('Delete Sponsor', [
                'action' => 'modal', $sponsor['Sponsor']['id'],
                'admin' => true,
            ],[
                'class' => 'pull-right delete-modal btn btn-danger',
                'data-id' => $sponsor['Sponsor']['id'],
                'data-name' => $sponsor['Sponsor']['name'],
        ]); ?>
    </div>
    <?php echo $this->Form->create('Sponsor'); ?>
    <?php $this->Form->inputDefaults([
        'class' => 'form-control',
        'error' => [
            'attributes' => [
                'class' => 'label label-danger',
            ],
        ]
    ]); ?>
    <?php echo $this->Element('Sponsors/form_fields'); ?>
    <?php echo $this->Form->end(['label' => 'Save', 'class' => 'btn btn-primary']); ?>
</div>
