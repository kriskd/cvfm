<div class="modal fade" id="events-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">
            Special Events for <?php echo $fiscalYear; ?>
        </h3>
      </div>
      <div class="modal-body">
        <?php if (!empty($events)): ?>
            <h4>Events take place from 4-6pm</h4>
            <ul>
                <?php foreach($events as $event): ?>
                    <li>
                            <?php echo date('F j', strtotime($event['Event']['date'])); ?> - <?php echo $event['Event']['description']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No upcoming events.</p>
        <?php endif; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
