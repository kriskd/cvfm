<div id="header">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 logo">
            <?php echo $this->Html->image('FM_Logo200.png', array(
                'class' => 'img-responsive',
                'alt' => 'Capitol View Farmers Market',
            )); ?>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 menu">
            <div class="top">
                <h1 class="hidden-xs">Capitol View Farmers Market</h1>
                <h2>Wednesdays &bull; June - October &bull; 3:00 - 7:00 pm</h2>
            </div>
            <div class="bottom hidden-sm hidden-xs">
                <?php echo $this->element('menu'); ?>
            </div>
        </div>
    </div>
    <div class="hidden-lg hidden-md">
        <?php echo $this->element('menu'); ?>
    </div>
</div>
