<div class="row" id="footer">
    <div id="footer-inner">
        <?php if (!empty($staffs['manager'])): ?>
            <h4>Market Manager<?php echo count($staffs['manager'])>1 ? 's': ''; ?>: <?php echo implode(' / ', $staffs['manager']); ?></h4>
        <?php endif; ?>
        <p class="email-mailto"></p>
        <p></p>
        <?= $this->Html->image('facebook.svg', [
            'alt' => 'Facebook',
            'url' => 'https://www.facebook.com/capitolviewfarmersmarket',
            'height' => '30',
            'width' => '30',
        ]) ?>
        <?= $this->Html->image('messenger.svg', [
            'alt' => 'Messenger',
            'url' => 'http://m.me/capitolviewfarmersmarket',
            'height' => '30',
            'width' => '30',
        ]) ?>
        <?php if (!empty($staffs['volunteer'])): ?>
            <h4>Board of Directors</h4>
            <p>
                <?php echo implode(" &bull; ", $staffs['volunteer']); ?>
            </p>
        <?php endif; ?>
    </div> <!-- footer-inner -->
</div> <!-- footer -->

