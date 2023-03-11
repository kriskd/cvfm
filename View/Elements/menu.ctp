<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <?php echo $this->Html->link('Capitol View Farmers\' Market', '/', array(
                'class' => 'hidden-lg hidden-md hidden-sm navbar-brand', 
            )); ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="<?php echo isset($slug) && $slug=='home' ? 'active' : ''; ?>">
                    <?php echo $this->Html->link('Home', '/'); ?>
                </li>
                <li class="<?php echo isset($slug) && $slug=='events' ? 'active' : ''; ?>">
                    <?php echo $this->Html->link('Events', array(
                        'controller' => 'events',
                        'action' => 'index',
                    )); ?>
                </li>
                <li class="<?php echo isset($slug) && $slug=='vendors' ? 'active' : ''; ?>">
                    <?php echo $this->Html->link('Vendors', array(
                        'controller' => 'vendors',
                        'action' => 'index',
                    )); ?>
                </li>
                <li class="<?php echo isset($slug) && $slug=='products' ? 'active' : ''; ?>">
                    <?php echo $this->Html->link('Products', array(
                        'controller' => 'products',
                        'action' => 'index',
                    )); ?>
                </li>
                <li class="<?php echo isset($slug) && $slug=='map' ? 'active' : ''; ?>">
                    <?php echo $this->Html->link('Map', array(
                        'controller' => 'pages',
                        'action' => 'map',
                    )); ?>
                </li>
                <?php if ($sponsorCount > 0): ?>
                    <li class="<?php echo isset($slug) && $slug=='sponsors' ? 'active' : ''; ?>">
                        <?php echo $this->Html->link('Sponsors', array(
                            'controller' => 'sponsors',
                            'action' => 'index',
                        )); ?>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
