<h2><?php echo $fiscalYear; ?> Vendors</h2>
<?php $noVendors = true; ?>
<?php foreach($schedules as $schedule): ?>
    <?php $vendors = $schedule['Vendor']; ?>
    <?php if (!empty($vendors)): ?>
    <?php $noVendors = false; ?>
<h3><?php echo $schedule['Schedule']['description']; ?>: <?php echo $schedule['Schedule']['start_date']; ?> - <?php echo $schedule['Schedule']['end_date']; ?></h3>
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
<?php endif; ?>
<p>Interested in becoming a vendor at the CVFM? Please complete the <?= $this->Html->link('2024 Vendor Application Form', 'https://docs.google.com/forms/d/e/1FAIpQLSfSx-Lbz3O8X6C-dpcVB4uL3ZQ7DogiI1yNpRp3HArZn1QqsQ/viewform', ['target' => '_blank']) ?>.</p>
