<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <p class="modal-title>">Add Vendor</p>
            </div>
        <div class="modal-body">
            <?php echo $this->Form->create('Vendor'); ?>
            <?php echo $this->Form->input('name'); ?>
            <?php echo $this->Form->input('location'); ?>
            <?php echo $this->Form->input('website'); ?>
            <?php echo $this->Form->input('schedule_id', $schedules); ?>
            <?php echo $this->Form->input('active', array('checked' => 'checked')); ?>
        </div>
        <div class="modal-footer">
            <?php echo $this->Form->submit(); ?>
            <?php echo $this->Form->end(); ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->