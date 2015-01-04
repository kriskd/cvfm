<div class="admin products edit">
    <div class="buttons">
        <?php echo $this->Html->link('Back', [
            'action' => 'index',
            'admin' => true,    
        ],[
            'class' => 'btn btn-info',
        ]); ?>
        <?php echo $this->Form->postLink('Delete Product', array(
            'action' => 'delete', $product['Product']['id'], 
            'admin' => true,
        ), array(
            'class' => 'confirm btn btn-danger',
        )); ?>
    </div>
    <?php echo $this->Form->create('Product'); ?>
    <?php echo $this->Element('Products/form'); ?>
    <?php echo $this->Form->end(['label' => 'Save', 'class' => 'btn btn-primary']); ?>
</div>
