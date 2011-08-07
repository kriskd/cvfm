<p><?php echo $this->Html->link('Add content', '/admin/contents/add'); ?></p>
<p><?php echo $this->Html->link('Back', '/admin/content'); ?></p>
<table>
<?php foreach($contents as $content): ?>
    <tr><td><?php echo $content['Content']['uri'];?></td>
        <td><?php echo $content['Content']['val']; ?></td>
        <td><?php echo $this->Html->link('Edit', '/admin/contents/edit/' . $content['Content']['id']); ?></td>
        <td><?php echo $this->Html->link('Delete', '/admin/contents/delete' . $content['Content']['id']); ?></td>
    </tr>          
<?php endforeach; ?>
</table>