<p>
    <?php echo $this->Html->link('Back', [
        'action' => 'index',
        'admin' => true,    
    ],[
        'class' => 'btn btn-primary',
    ]); ?>
</p>
<?php echo $this->Form->create('Sponsor'); ?>
<?php $this->Form->inputDefaults(['class' => 'form-control']); ?>
<?php echo $this->Element('Sponsors/form_fields'); ?>
<?php echo $this->Form->end(['label' => 'Save', 'class' => 'btn btn-primary']); ?>
