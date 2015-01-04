<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CVFM Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="<?php echo isset($slug) && $slug=='schedules' ? 'active' : ''; ?>">
                <?php echo $this->Html->link('Schedule', array(
                    'controller' => 'schedules',
                    'action' => 'index',
                    'admin' => true,
                )); ?>
            </li>
            <li class="<?php echo isset($slug) && $slug=='pages' ? 'active' : ''; ?>">
                <?php echo $this->Html->link('Pages', array(
                    'controller' => 'pages',
                    'action' => 'edit', 1,
                    'admin' => true, 
                )); ?>
            </li>
            <li class="<?php echo isset($slug) && $slug=='events' ? 'active' : ''; ?>">
                <?php echo $this->Html->link('Events', array(
                    'controller' => 'events',
                    'action' => 'index',
                    'admin' => true, 
                )); ?>
            </li>
            <li class="<?php echo isset($slug) && $slug=='products' ? 'active' : ''; ?>">
                <?php echo $this->Html->link('Products', array(
                    'controller' => 'products',
                    'action' => 'index',
                    'admin' => true, 
                )); ?>
            </li>
            <li class="<?php echo isset($slug) && $slug=='sponsors' ? 'active' : ''; ?>">
                <?php echo $this->Html->link('Sponsors', array(
                    'controller' => 'sponsors',
                    'action' => 'index',
                    'admin' => true, 
                )); ?>
            </li>
            <li class="<?php echo isset($slug) && $slug=='vendors' ? 'active' : ''; ?>">
                <?php echo $this->Html->link('Vendors', array(
                    'controller' => 'vendors',
                    'action' => 'index',
                    'admin' => true, 
                )); ?>
            </li>
            <li>    
                <?php echo $this->Html->link('Logout', array(
                    'controller' => 'users',
                    'action' => 'logout', 
                    'admin' => false,
                )); ?>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
