<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <p class="modal-title>">Add Product</p>
            </div>
        <div class="modal-body">
            <?php echo $this->Element('Products/form'); ?>
        </div>
        <div class="modal-footer">
            <?php echo $this->Form->submit(); ?>
            <?php echo $this->Form->end(); ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
