<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 home-left">
        <?php echo $this->Element('slideshow'); ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 home-right">
        <?php echo $this->Html->link('Events<span class="glyphicon glyphicon-play"></span>', '#', array(
            'class' => 'btn btn-lg btn-brown btn-block events-modal',
            'escape' => false, 
        )); ?>
        <?php echo $this->Html->link('Documents<span class="glyphicon glyphicon-play"></span>', '#', array(
            'class' => 'btn btn-lg btn-brown btn-block docs-modal',
            'data-toggle' => 'modal',
            'data-target' => '#docs-modal',
            'escape' => false,
        )); ?>
        <?php if (!empty($schedule['Schedule']['start_date']) && !empty($schedule['Schedule']['end_date'])): ?>
            <h2>The Capitol View Farmer's Market operates from <?php echo $schedule['Schedule']['start_date']; ?> - <?php echo $schedule['Schedule']['end_date']; ?> from 3:00PM - 7:00PM.</h2>
            <h4>The market will close at 6:30PM closer to Fall.</h4>
        <?php else: ?>
            <h2>The schedule for <?php echo $fiscalYear; ?> will be available in Spring.</h2>
        <?php endif; ?>
    </div>
</div>
<div class="modal fade" id="docs-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Documents</h4>
      </div>
      <div class="modal-body">
        <p><?php echo $this->Html->link('2014 Rules and Bylaws', '/files/CVFM_2014_Rules_and_ByLaws.pdf'); ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
