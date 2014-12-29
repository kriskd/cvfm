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
            <ul class="nav nav-justified">
                <li><a href="/">Home</a></li>
                <li>
                    <?php echo $this->Html->link('Events', array(
                        'controller' => 'events',
                        'action' => 'index',        
                    )); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Vendors', array(
                        'controller' => 'vendors',
                        'action' => 'index',        
                    )); ?>
                </li>
                <li>
                    <?php echo $this->Html->link('Products', array(
                        'controller' => 'products',
                        'action' => 'index',        
                    )); ?>
                </li>
                <li><a href="/pages/map">Map</a></li>
                <li><a href="/sponsors">Sponsors</a></li>
            </ul>
        </div>
    </div>
</nav>
