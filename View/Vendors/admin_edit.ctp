<div class="admin vendors edit">
    <p>
        <?php echo $this->Html->link('Back', array(
            'action' => 'index',
        ), array(
            'class' => 'btn btn-primary', 
        )); ?>
    </p>
    <h2><?php echo $vendor['Vendor']['business_name']; ?></h2>
    <?php echo $this->Element('Vendors/form'); ?>
</div>
