<table>
<?php foreach($vendors as $vendor): ?>
    <tr><td><?php echo $vendor['Vendor']['name'];?></td>
        <td><?php echo $vendor['Vendor']['location']; ?></td>
        <td><?php echo $vendor['Vendor']['website']; ?></td>
        <td><?php echo $this->Html->link('Edit', '/admin/vendors/edit/' . $vendor['Vendor']['id']); ?></td></tr>          
<?php endforeach; ?>
</table>