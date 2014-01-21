<?php //var_dump($schedules); ?>
<h2>2013 Vendors</h2>
<?php foreach($schedules as $schedule): ?>
    <h3><?php echo $schedule['Schedule']['description']; ?></h3>
    <?php $vendors = $schedule['Vendor']; ?>
    <ul>
        <?php foreach($vendors as $vendor): ?>
            <?php if($vendor['active'] ==1): ?>
                <li>
                    <?php if($vendor['website']): ?>
                        <?php echo $this->Html->link($vendor['business_name'], $vendor['website']); ?>, <?php echo $vendor['location']; ?>
                    <?php else: ?>
                        <?php echo $vendor['business_name']; ?>, <?php echo $vendor['location']; ?>
                    <?php endif; ?>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>