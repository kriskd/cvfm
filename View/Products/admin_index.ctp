<p><?php echo $this->Html->link('Add product', '/admin/products/add', array('class' => 'btn btn-primary fire-modal', 'data-action' => 'products/add', 'data-toggle' => 'modal', 'data-target' => '.modal')); ?></p>
<?php foreach($product_types as $type => $items): ?>
    <h2><?php echo $type; ?> </h2>
    <?php foreach($items as $item): ?>
        <?php $id = key($item['product']); ?>
        <?php echo $this->Html->link(array_pop($item['product']), '/admin/products/edit/' . $id); ?>
    <?php endforeach; ?>
<?php endforeach; ?>
