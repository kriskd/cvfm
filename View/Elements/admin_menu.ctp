<ul id="admin-menu">
    <li>
        <?php echo $this->Html->link('Pages', array(
            'controller' => 'pages',
            'action' => 'index',
            'admin' => true, 
        )); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Events', array(
            'controller' => 'events',
            'action' => 'index',
            'admin' => true, 
        )); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Products', array(
            'controller' => 'products',
            'action' => 'index',
            'admin' => true, 
        )); ?>
    </li>
    <li>
        <?php echo $this->Html->link('Sponsors', array(
            'controller' => 'sponsors',
            'action' => 'index',
            'admin' => true, 
        )); ?>
    </li>
    <li>
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
