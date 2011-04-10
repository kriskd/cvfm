<?php echo $this->Form->create('Vendor', array('action' => '/edit/' . $vendor['Vendor']['id'])); ?>
<?php echo $this->Form->hidden('id', array('value' => $vendor['Vendor']['id'])); ?>
<?php echo $this->Form->label('Name:'); ?>
<?php echo $this->Form->text('name', array('value' => $vendor['Vendor']['name'])); ?>
<?php echo $this->Form->label('Location:'); ?>
<?php echo $this->Form->text('location', array('value' => $vendor['Vendor']['location'])); ?>
<?php echo $this->Form->label('Website:'); ?>
<?php echo $this->Form->text('website', array('value' => $vendor['Vendor']['website'])); ?>
<?php echo $this->Form->label('Schedule:'); ?>
<?php echo $this->Form->select('schedule_id', $schedules, $vendor['Vendor']['schedule_id']); ?>
<?php echo $this->Form->label('Active:'); ?>
<?php if($vendor['Vendor']['active'] == '1'): ?>
    <?php $active = 'yes'; ?>
    <?php $options['checked'] = 'checked'; ?>
<?php else: ?>
    <?php $active = 'no'; ?>    
<?php endif; ?>
<?php $options['value'] = $active; ?>
<?php echo $this->Form->checkbox('active', $options); ?>
<?php echo $this->Form->submit('Save vendor'); ?>
<?php echo $this->Form->end(); ?>

<?php //var_dump($product_types); ?>

<?php echo $this->Form->create('Vendor', array('action' => '/add_product/' . $vendor['Vendor']['id'])); ?>
<?php echo $this->Form->label('Add product:'); ?>
<?php echo $this->Form->select('product_type', $product_types, null, array('class' => 'product_types')); ?>
<?php echo $this->Html->div('products', ''); ?>
<?php echo $this->Form->submit('Add product to vendor'); ?>
<?php echo $this->Form->end(); ?>

<?php if($vendor['Product']): ?>
<?php //var_dump($vendor); ?>
<h2>Products</h2>
    <table>
        <?php foreach($vendor['Product'] as $product): ?>
            <tr><td><?php echo $product['name']; ?></td><td><?php echo $this->Html->link('Delete', '/admin/vendors/delete_product/' . $vendor['Vendor']['id'] . '/' . $product['id']); ?></tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>