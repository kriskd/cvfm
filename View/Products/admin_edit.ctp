<div class="admin products edit">
    <div class="buttons">
        <?php echo $this->Html->link('Back', [
            'action' => 'index',
            'admin' => true,    
        ],[
            'class' => 'btn btn-info',
        ]); ?>
        <?php echo $this->Html->link('Delete Product', [
                'controller' => 'products',
                'action' => 'modal', $product['Product']['id'],
                'admin' => true,
            ],[
                'class' => 'pull-right delete-modal btn btn-danger',
                'data-id' => $product['Product']['id'],
                'data-name' => $product['Product']['name'],
        ]); ?>
    </div>
    <?php echo $this->Form->create('Product'); ?>
    <?php echo $this->Element('Products/form'); ?>
    <?php echo $this->Form->end(['label' => 'Save', 'class' => 'btn btn-primary']); ?>
</div>
