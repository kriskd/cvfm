<p>
    <?php echo $this->Html->link('Back', array(
        'action' => 'index',
    )); ?>
</p>
<?php echo $this->Form->create('Vendor'); ?>
<?php $this->Form->inputDefaults(array(
    'class' => 'form-control',
)); ?>
<?php echo $this->Form->hidden('id'); ?>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <?php echo $this->Form->input('name'); ?>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <?php echo $this->Form->input('business_name'); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <?php echo $this->Form->input('location'); ?>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <?php echo $this->Form->input('website'); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <?php echo $this->Form->input('schedule_id', array('options' => $schedules, 'selected' => $vendor['Vendor']['schedule_id'])); ?>
        <?php $options = array('label' => 'Active'); ?>
        <?php if($vendor['Vendor']['active'] == '1'): ?>
            <?php $options['checked'] = 'checked'; ?>
        <?php endif; ?>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <?php $options['value'] = $vendor['Vendor']['active']; ?>
        <?php echo $this->Form->input('active', $options); ?>
    </div>
</div>
<?php echo $this->Form->submit('Save vendor'); ?>
<?php echo $this->Form->end(); ?>

<?php echo $this->Form->create('ProductVendors', array('action' => '/add_product/' . $vendor['Vendor']['id'])); ?>
<?php echo $this->Form->label('Add product:'); ?>
<?php echo $this->Form->input('product_type', array('options' => $product_types, 'empty' => '')); ?>
<?php echo $this->Html->div('products', ''); ?>
<?php echo $this->Form->submit('Add product to vendor'); ?>
<?php echo $this->Form->end(); ?>

<?php if(isset($vendor['Product'])): ?>
    <h2>Products</h2>
    <table>
        <?php foreach($vendor['Product'] as $product): ?>
            <tr><td><?php echo $product['name']; ?></td><td><?php echo $this->Html->link('Delete', '/admin/product_vendors/delete_product/' . $vendor['Vendor']['id'] . '/' . $product['id']); ?></tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
