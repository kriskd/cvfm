<?php foreach($product_types as $type => $items): ?>
    <?php echo $this->Form->create(); ?>
    <?php foreach($items as $item): ?>
        <?php $id = key($item['product']); ?>
        <?php $options[$id] = array_pop($item['product']); ?>
    <?php endforeach; ?>
    <?php echo $this->Form->input($type, array('options' => $options, 'class' => 'products')); ?>
    <?php $options = array(); ?>
    <?php echo $this->Form->end(); ?>
<?php endforeach; ?>

