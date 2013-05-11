<p><?php echo $this->Html->link('Add vendor', '/admin/vendors/add', array('class' => 'colorbox')); ?></p>
<p><?php echo $this->Html->link('Back', '/admin/vendors'); ?></p>
<table>
<?php foreach($vendors as $vendor): ?>
    <tr><td><?php echo $vendor['Vendor']['name'];?></td>
        <td><?php echo $vendor['Vendor']['location']; ?></td>
        <td><?php echo $vendor['Vendor']['website']; ?></td>
        <td><?php echo $vendor['Schedule']['short']; ?></td>
        <td><?php echo $this->Html->link('Edit', '/admin/vendors/edit/' . $vendor['Vendor']['id']); ?></td>
        <td><?php echo $this->Html->link('Delete', '/admin/vendors/delete' . $vendor['Vendor']['id']); ?></td>
    </tr>          
<?php endforeach; ?>
</table>