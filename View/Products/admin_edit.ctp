<div class="admin products edit">
    <?php echo $this->Html->link('Add another product', array(
        'controller' => 'products', 
        'action' => 'add', 
        'admin' => true,
    ), array(
        'class' => 'btn btn-primary fire-modal',
        'data-action' => '/admin/products/add',
    )); ?>&nbsp;
    <?php echo $this->Html->link('Delete product', array(
        'controller' => 'products', 
        'action' => 'delete', $product['Product']['id'], 
        'admin' => true,
    ), array(
        'class' => 'confirm btn btn-danger',
    )); ?>
    <?php echo $this->Element('Products/form'); ?>
</div>
