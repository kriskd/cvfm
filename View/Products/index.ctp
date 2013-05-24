<div id="top">
    <h2>Products</h2>
    <p>Fruits and vegetables are only available when in season.
    Vendor selection may vary week by week.</p>
    <div class="col1">
    <?php echo $this->Form->create(); ?>
    <?php foreach($product_types as $type => $items): ?>
        <?php foreach($items as $item): ?>
            <?php $id = key($item['product']); ?>
            <?php $options[$id] = array_pop($item['product']); ?>
        <?php endforeach; ?>
        <?php echo $this->Form->input($type . ': ', array('options' => $options, 'class' => 'products', 'id' => str_replace(' ', '', $type))); ?>
        <?php $options = array(); ?> 
    <?php endforeach; ?>
    <?php echo $this->Form->end(); ?>
    </div>
    <div class="col2">
    </div>
</div>
<?php if($products_in_season): ?>
<div id="bottom">
    <?php $count = count($products_in_season); ?>
    <?php $first = ceil($count/2); ?>
    <?php $second = $count - $first; ?>
    <h2>What's in Season in <?php echo date('F'); ?></h2>
    <div class="col1">
        <ul>
        <?php for($i = 0; $i < $first; $i++): ?>
            <li><?php echo $products_in_season[$i]; ?></li>
        <?php endfor; ?>
        </ul>
    </div>
    <div class="col1">
        <ul>
        <?php for($i = $first; $i < $count; $i++): ?>
            <li><?php echo $products_in_season[$i]; ?></li>
        <?php endfor; ?>
        </ul>
    </div>
</div>
<?php endif; ?>