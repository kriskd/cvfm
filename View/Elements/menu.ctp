<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="hidden-lg hidden-md hidden-sm navbar-brand" href="#">Capitol View Farmers Market</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <?php echo $this->Html->link('Home', '/', array(
                        'class' => isset($slug) && $slug=='home' ? 'active' : '',
                    )); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('About', array(
                        'controller' => 'pages',
                        'action' => 'about',        
                    ), array(
                        'class' => isset($slug) && $slug=='about' ? 'active' : '',
                    )); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Vendors', array(
                        'controller' => 'vendors',
                        'action' => 'index',        
                    ), array(
                        'class' => isset($slug) && $slug=='vendors' ? 'active' : '',
                    )); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Products', array(
                        'controller' => 'products',
                        'action' => 'index',        
                    ), array(
                        'class' => isset($slug) && $slug=='products' ? 'active' : '',
                    )); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Map', array(
                        'controller' => 'pages',
                        'action' => 'map',        
                    ), array(
                        'class' => isset($slug) && $slug=='map' ? 'active' : '',
                    )); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Sponsors', array(
                        'controller' => 'sponsors',
                        'action' => 'index',        
                    ), array(
                        'class' => isset($slug) && $slug=='sponsors' ? 'active' : '',
                    )); ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
