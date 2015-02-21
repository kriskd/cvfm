<div class="admin vendors edit">
    <div class="buttons">
        <?php echo $this->Html->link('Back', array(
            'action' => 'index',
        ), array(
            'class' => 'btn btn-info', 
        )); ?>
        <?php echo $this->Html->link('Delete Vendor', [
                'action' => 'modal', $vendor['Vendor']['id'],
                'admin' => true,
            ],[
                'class' => 'pull-right delete-modal btn btn-danger',
                'data-id' => $vendor['Vendor']['id'],
                'data-name' => $vendor['Vendor']['business_name'],
        ]); ?>
    </div>
    <?php echo $this->Element('Vendors/form'); ?>
</div>
