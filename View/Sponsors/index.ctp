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
    <p>If you are interested in sponsoring The Capitol View Farmers Market or becoming a friend of the market,
    please review our <?php echo $this->Html->link('2020 Sponsorship Information', '/files/CVFM_Sponsor_letter_2020.pdf'); ?> and contact <span class="email-mailto"></span></p>
</div>
