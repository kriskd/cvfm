<div class="row" id="footer">
    <div id="footer-inner">
        <?php if (!empty($staffs['manager'])): ?>
            <h4>Market Manager<?php echo count($staffs['manager'])>1 ? 's': ''; ?>: <?php echo implode(' / ', $staffs['manager']); ?></h4>
        <?php endif; ?>
        <p class="email-mailto">608-218-4732 (608-21V-IPEA) </p>
        <?php if (!empty($staffs['volunteer'])): ?>
            <h4>Board of Directors</h4>
            <p>
                <?php echo implode(" &bull; ", $staffs['volunteer']); ?>
            </p>
        <?php endif; ?>
    </div> <!-- footer-inner -->
</div> <!-- footer -->

