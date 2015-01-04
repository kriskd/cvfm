<div class="admin products index">
    <h2>
        <?php echo __('Products'); ?>
        <div class="buttons pull-right">
            <?php echo $this->Html->link('Add Product', '/admin/products/add', array('class' => 'btn btn-primary fire-modal', 'data-action' => 'products/add', 'data-toggle' => 'modal', 'data-target' => '.modal')); ?></p>
        </div>
    </h2>
    <?php foreach($product_types as $type => $items): ?>
        <h3><?php echo $type; ?></h3>
        <?php foreach($items as $item): ?>
            <?php $id = key($item['product']); ?>
            <?php echo $this->Html->link(array_pop($item['product']), '/admin/products/edit/' . $id); ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>
