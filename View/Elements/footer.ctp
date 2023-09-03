<div class="row" id="footer">
    <div id="footer-inner">
        <?php if (!empty($staffs['manager'])): ?>
            <h4>Market Manager<?php echo count($staffs['manager'])>1 ? 's': ''; ?>: <?php echo implode(' / ', $staffs['manager']); ?></h4>
        <?php endif; ?>
        <p class="email-mailto"></p>
        <p></p>
        <?= $this->Html->link(
            $this->Html->image('facebook.svg', [
                'alt' => 'Facebook',
                'height' => '30',
                'width' => '30',
            ]), 'https://www.facebook.com/capitolviewfarmersmarket', [
                'target' => '_blank',
                'escape' => false,
            ]
        ) ?>
        <?= $this->Html->link(
            $this->Html->image('instagram.svg', [
                'alt' => 'Instagram',
                'height' => '30',
                'width' => '30',
                'target' => '_blank',
            ]), 'https://www.instagram.com/capitolviewfarmersmarket', [
                'target' => '_blank',
                'escape' => false,
            ]
        ) ?>
        <?= $this->Html->link(
            $this->Html->image('messenger.svg', [
            'alt' => 'Messenger',
            'height' => '30',
            'width' => '30',
            'target' => '_blank',
            ]), 'http://m.me/capitolviewfarmersmarket', [
                'target' => '_blank',
                'escape' => false,
            ]
        )?>
        <?php if (!empty($staffs['volunteer'])): ?>
            <h4>Board of Directors</h4>
            <p>
                <?php echo implode(" &bull; ", $staffs['volunteer']); ?>
            </p>
        <?php endif; ?>
    </div> <!-- footer-inner -->
</div> <!-- footer -->

