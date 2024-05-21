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
            <p>The Capitol View Farmer's Market will operate from <?php echo $schedule['Schedule']['start_date']; ?> - <?php echo $schedule['Schedule']['end_date']; ?> from 3:00PM - 7:00PM.</p>
        <?php endif; ?>
			<p>
				<?php echo $content['Page']['val']; ?>
			</p>
    </div>
</div>
<h2 class="text-center">Check out our listing in the <?= $this->Html->link('2024 Farm Fresh Atlas', 'https://farmfreshatlas.org/view/capitol-view-farmers-market', ['target' => '_blank']) ?>!</h2>
<h2 class="text-center">Thank you to Redfin Blog for including us in <?= $this->Html->link('Madison Magic: Crafting Your Perfect Madison, WI Bucket List', 'https://www.redfin.com/blog/madison-wi-bucket-list/', ['target'=> '_blank']) ?>!</h2>
<div class="row best-of">
    <?= $this->Html->image('best-of.jpg', ['class' => 'img-responsive hidden-xs']) ?>
    <?= $this->Html->image('best-of-300.jpg', ['class' => 'img-responsive visible-xs']) ?>
</div>
