<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 home-left">
        <?php echo $this->Element('slideshow'); ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 home-right">
		<?php /*
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
		*/ ?>
        <?php if (!empty($schedule['Schedule']['start_date']) && !empty($schedule['Schedule']['end_date'])): ?>
            <p>The Capitol View Farmer's Market operates from <?php echo $schedule['Schedule']['start_date']; ?> - <?php echo $schedule['Schedule']['end_date']; ?> from 3:00PM - 7:00PM.</p>
        <?php else: ?>
            <h2>The schedule for <?php echo $fiscalYear; ?> will be available in Spring.</h2>
        <?php endif; ?>
			<p>
				<?php echo $content['Page']['val']; ?>
			</p>
    </div>
</div>
<div class="row best-of">
    <?= $this->Html->image('best-of.jpg', ['class' => 'img-responsive hidden-xs']) ?>
    <?= $this->Html->image('best-of-300.jpg', ['class' => 'img-responsive visible-xs']) ?>
</div>
