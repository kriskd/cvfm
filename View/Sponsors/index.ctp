<h2>2013 Sponsors</h2>
<?php foreach($sponsors as $sponsor): ?>
    <?php $amount = $sponsor['Sponsor']['amount']; ?>
    <div class="sponsor<?php echo $amount >= 500 ? ' gold' : ($amount >=250 ? ' silver' : ''); ?>">
        <?php if($sponsor['Sponsor']['logo']): ?>
            <?php echo $this->Html->image('/img/' . $sponsor['Sponsor']['logo'], array('alt' => $sponsor['Sponsor']['name'])); ?>
        <?php endif; ?>
        <?php echo $amount >= 500 ? '<h2>' : ($amount >=250 ? '<h3>' : '<p>'); ?>
        <?php if($sponsor['Sponsor']['website']): ?>
            <?php echo $this->Html->link($sponsor['Sponsor']['name'], $sponsor['Sponsor']['website']);?>
        <?php else: ?>
            <h3><?php echo $sponsor['Sponsor']['name']; ?></h3>
        <?php endif; ?>
        <?php echo $amount >= 500 ? '</h2>' : ($amount >=250 ? '</h3>' : '</p>'); ?>
    </div>
<?php endforeach; ?>
<p>If you are interested in sponsoring The Capitol View Farmers Market,
please contact <span class="email-mailto"></span></p>
