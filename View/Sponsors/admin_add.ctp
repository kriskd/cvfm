<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <p class="modal-title>">Add Sponsor</p>
            </div>
        <div class="modal-body">
            <?php echo $this->Form->Create('Sponsor'); ?>
            <?php echo $this->Form->label('Name:'); ?>
            <?php echo $this->Form->text('name'); ?>
            <?php echo $this->Form->error('name'); ?>
            <?php echo $this->Form->label('Website:'); ?>
            <?php echo $this->Form->text('website'); ?>
            <?php echo $this->Form->error('website'); ?>
            <?php echo $this->Form->label('Amount:'); ?>
            <?php echo $this->Form->text('amount'); ?>
            <?php echo $this->Form->label('Logo file:'); ?>
            <?php echo $this->Form->text('logo'); ?>
        </div>
        <div class="modal-footer">
            <?php echo $this->Form->submit(); ?>
            <?php echo $this->Form->end(); ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->