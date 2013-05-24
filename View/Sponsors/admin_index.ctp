<p><?php echo $this->Html->link('Add sponsor', '/admin/sponsors/add', array('class' => 'colorbox')); ?></p>
<p><?php echo $this->Html->link('Back', '/admin/sponsors'); ?></p>
<table>
<?php foreach($sponsors as $sponsor): ?>
    <tr><td><?php echo $sponsor['Sponsor']['name'];?></td>
        <td><?php echo $sponsor['Sponsor']['website']; ?></td>
        <td><?php echo $sponsor['Sponsor']['amount']; ?></td>
        <td><?php echo $sponsor['Sponsor']['logo']; ?></td>
        <td><?php echo $this->Html->link('Edit', '/admin/sponsors/edit/' . $sponsor['Sponsor']['id']); ?></td>
        <td><?php echo $this->Html->link('Delete', '/admin/sponsors/delete' . $sponsor['Sponsor']['id']); ?></td>
    </tr>          
<?php endforeach; ?>
</table>