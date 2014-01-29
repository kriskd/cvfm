<?php echo $content['Page']['val']; ?>
<h3>Documents</h3>
<p>2014 vendor application coming soon!</p>
<?php if (!empty($events)): ?>
        <h3>Special Events for 2014</h3>
        <h4>Events take place from 4-6pm</h4>
        <ul>
                <?php foreach($events as $event): ?>
                        <li>
                                <?php echo date('F j', strtotime($event['Event']['date'])); ?> - <?php echo $event['Event']['description']; ?>
                        </li>
                <?php endforeach; ?>
        </ul>
<?php endif; ?>