<div class="admin sponsors edit">
    <div class="buttons">
        <?php echo $this->Html->link('Back', [
            'action' => 'index',
            'admin' => true,    
        ],[
            'class' => 'btn btn-info',
        ]); ?>
        <?php echo $this->Form->postLink('Delete Sponsor', array(
            'action' => 'delete', $sponsor['Sponsor']['id'], 
            'admin' => true,
        ), array(
            'class' => 'confirm btn btn-danger',
        )); ?>
    </div>
    <?php echo $this->Form->create('Sponsor'); ?>
    <?php $this->Form->inputDefaults(['class' => 'form-control']); ?>
    <?php echo $this->Element('Sponsors/form_fields'); ?>
    <?php echo $this->Form->end(['label' => 'Save', 'class' => 'btn btn-primary']); ?>
</div>
