<?php echo $content['Page']['val']; ?>
<h3>Documents</h3>
<p><?php echo $this->Html->link('2014 Vendor Application', '/files/cvfm2014vendorapp.pdf'); ?></p>
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