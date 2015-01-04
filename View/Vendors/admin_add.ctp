<div class="admin vendors add">
    <p>
        <?php echo $this->Html->link('Back', [ 
            'action' => 'index',
        ],[
        'class' => 'btn btn-info',
        ]); ?>
    </p>
    <?php echo $this->Element('Vendors/form'); ?>
</div>
