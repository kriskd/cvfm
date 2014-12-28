<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8">
        <?php echo $this->Element('slideshow'); ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
        <p>Some content here</p>
    </div>
</div>
<?php //echo $content['Page']['val']; ?>
<?php /*
<h3>Documents</h3>
<p><?php echo $this->Html->link('2014 Vendor Application', '/files/cvfm2014vendorapp.pdf'); ?></p>
<p><?php echo $this->Html->link('2014 Rules and Bylaws', '/files/CVFM_2014_Rules_and_ByLaws.pdf'); ?></p>
<?php if (!empty($events)): ?>
        <h3>Special Events for 2014</h3>
        <h4>Events take place from 4-6pm</h4>
        <ul>
                <?php foreach($events as $event): ?>
                        <li>
                                <?php echo date('F j', strtotime($event['Event']['date'])); ?> - <?php echo $event['Event']['description']; ?>
                        </li>
                <?php endforeach; ?>
        </ul>
<?php endif; ?>
 */ ?>
