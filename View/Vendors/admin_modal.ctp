<div class="modal fade" id="delete-confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Vendor Delete</h4>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure you want to delete <?php echo $name; ?>?
                </p>
            </div>
            <div class="modal-footer">
                <?php echo $this->Html->link('Close', '#', array(
                    'data-dismiss' => 'modal',
                    'class' => 'btn btn-default btn-lg'
                )); ?>
                <?php echo $this->Form->postLink('Delete', array(
                    'action' => 'delete', $id,  
                    'admin' => true
                ),
                array(
                    'class' => 'btn btn-danger btn-lg'
                )); ?>                                    
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
