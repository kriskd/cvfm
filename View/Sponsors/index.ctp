<div class="sponsors">
    <div class="row">
        <?php if ($sponsors): ?>
            <div class="col-lg-6">
                <h2>Sponsors</h2>
                <?php foreach($sponsors as $sponsor): ?>
                    <?php $amount = $sponsor['Sponsor']['amount']; ?>
                    <div class="sponsor<?php echo $amount >= 500 ? ' gold' : ($amount >=250 ? ' silver' : ''); ?>">
                        <?php echo $amount >= 500 ? '<h2>' : ($amount >=250 ? '<h3>' : '<p>'); ?>
                        <?php if($sponsor['Sponsor']['website']): ?>
                            <?php echo $this->Html->link($sponsor['Sponsor']['name'], $sponsor['Sponsor']['website']);?>
                        <?php else: ?>
                            <h3><?php echo $sponsor['Sponsor']['name']; ?></h3>
                        <?php endif; ?>
                        <?php echo $amount >= 500 ? '</h2>' : ($amount >=250 ? '</h3>' : '</p>'); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if ($friends): ?>
            <div class="col-lg-6">
                <h2>Friends of the Market</h2>
                <?php foreach($friends as $friend): ?>
                    <p><?php echo $friend['Sponsor']['name']; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <p>Interested in becoming a sponsor? Please complete the <?= $this->Html->link('2024 Sponsorship Form', 'https://docs.google.com/forms/d/e/1FAIpQLSfX_F5TmpE1s9uDJIPdq1uwT4BkFIOzjwLsn2BEag1u6jasPQ/viewform', ['target' => '_blank']) ?> to learn more about promoting your business with our sponsorship opportunities!</p>
</div>
