<div id="accordion">
    <?php foreach($groupedProducts as $name => $group): ?>
        <h3><?php echo $this->Form->label($name); ?></h3>
        <div>
            <?php $count = 1; ?>
            <div class="col1">
                <?php foreach($group as $id => $product): ?>
                    <?php echo $this->Form->select('Product', array($id => $product), array('multiple' => 'checkbox', 'class' => '', 'hiddenField' => false)); ?>
                    <?php if ($count == ceil(count($group)/2)): ?>
                        </div>
                        <div class="col2">
                    <?php endif; ?>
                    <?php $count++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
