<ul>
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
