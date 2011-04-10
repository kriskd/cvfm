<?php foreach($product_types as $type => $items): ?>
    <h2><?php echo $type; ?> </h2>
    <?php foreach($items as $item): ?>
        <?php $id = key($item['product']); ?>
        <?php echo $this->Html->link(array_pop($item['product']), '/admin/products/edit/' . $id); ?>
    <?php endforeach; ?>
<?php endforeach; ?>