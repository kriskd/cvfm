<h3 class="modal-title">
	Special Events for <?php echo $fiscalYear; ?>
</h3>
<?php if (!empty($events)): ?>
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
