<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title>">Add Sponsor</h4>
            </div>
        <div class="modal-body">
            <?php echo $this->Form->create('Sponsor'); ?>
            <?php echo $this->Element('Sponsors/form_fields'); ?>
        </div>
        <div class="modal-footer">
            <?php echo $this->Form->end(['label' => 'Save', 'class' => 'btn btn-primary']); ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
