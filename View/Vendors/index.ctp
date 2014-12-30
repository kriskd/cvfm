<h2><?php echo date('Y'); ?> Vendors</h2>
<?php $noVendors = true; ?>
<?php foreach($schedules as $schedule): ?>
    <?php $vendors = $schedule['Vendor']; ?>
    <?php if (!empty($vendors)): ?>
    <?php $noVendors = false; ?>
        <h3><?php echo $schedule['Schedule']['description']; ?></h3>
        <ul>
            <?php foreach($vendors as $vendor): ?>
                <li>
                    <?php if($vendor['website']): ?>
                        <?php echo $this->Html->link($vendor['business_name'], $vendor['website']); ?>, <?php echo $vendor['location']; ?>
                    <?php else: ?>
                        <?php echo $vendor['business_name']; ?>, <?php echo $vendor['location']; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<?php endforeach; ?>
<?php if ($noVendors): ?>
    <p>Coming soon...</p>
    <?php return; ?>
<?php endif; ?>
