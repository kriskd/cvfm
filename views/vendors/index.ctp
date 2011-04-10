<table>
<?php foreach($vendors as $vendor): ?>
    <tr><td><?php echo $vendor['Vendor']['name'];?></td>
        <td><?php echo $vendor['Vendor']['location']; ?></td>
        <td><?php echo $vendor['Vendor']['website']; ?></td></tr>          
<?php endforeach; ?>
</table>