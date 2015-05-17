<h3 class="modal-title">
	Special Events for <?php echo $fiscalYear; ?>
</h3>
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
