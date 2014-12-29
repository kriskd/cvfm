<div class="products">
    <div class="top">
        <h2>Products</h2>
        <p>Fruits and vegetables are only available when in season.
        Vendor selection may vary week by week.</p>
        <div class="row">
            <div class="col-lg-4 col-lg-push-8 col-md-4 col-md-push-8 col-sm-4 col-sm-push-8 col-xs-12 results">
            </div>
            <div class="col-lg-8 col-lg-pull-4 col-md-8 col-md-pull-4 col-sm-8 col-sm-pull-4 col-xs-12 product-select">
            <?php echo $this->Form->create('Product', array('class' => 'form-inline')); ?>
            <?php foreach($product_types as $type => $items): ?>
                <?php foreach($items as $item): ?>
                    <?php $id = key($item['product']); ?>
                    <?php $options[$id] = array_pop($item['product']); ?>
                <?php endforeach; ?>
                <?php echo $this->Form->input($type . ': ', array('options' => $options, 'class' => 'products form-control input-sm', 'id' => str_replace(' ', '', $type))); ?>
                <?php $options = array(); ?> 
            <?php endforeach; ?>
            <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
    <?php if($products_in_season): ?>
    <div class="bottom">
        <?php $count = count($products_in_season); ?>
        <?php $first = ceil($count/2); ?>
        <?php $second = $count - $first; ?>
        <h2>What's in Season in <?php echo date('F'); ?></h2>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul>
                <?php for($i = 0; $i < $first; $i++): ?>
                    <li><?php echo $products_in_season[$i]; ?></li>
                <?php endfor; ?>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <ul>
                <?php for($i = $first; $i < $count; $i++): ?>
                    <li><?php echo $products_in_season[$i]; ?></li>
                <?php endfor; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
