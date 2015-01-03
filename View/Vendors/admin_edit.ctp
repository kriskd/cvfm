<div class="admin vendors edit">
    <div class="buttons">
        <?php echo $this->Html->link('Back', array(
            'action' => 'index',
        ), array(
            'class' => 'btn btn-info', 
        )); ?>
        <?php echo $this->Form->postLink('Delete vendor', array(
            'action' => 'delete', $vendor['Vendor']['id'], 
            'admin' => true,
        ), array(
            'class' => 'confirm btn btn-danger',
        )); ?>
    </div>
    <?php echo $this->Element('Vendors/form'); ?>
</div>
