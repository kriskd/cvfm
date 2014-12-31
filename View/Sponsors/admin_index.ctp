<p><?php echo $this->Html->link('Add sponsor', '/admin/sponsors/add', array('class' => 'fire-modal', 'data-action' => 'sponsors/add', 'data-toggle' => 'modal', 'data-target' => '.modal')); ?></p>
<p><?php echo $this->Html->link('Back', '/admin/sponsors'); ?></p>
<table>
<?php foreach($sponsors as $sponsor): ?>
    <tr><td><?php echo $sponsor['Sponsor']['name'];?></td>
        <td><?php echo $sponsor['Sponsor']['website']; ?></td>
        <td><?php echo $sponsor['Sponsor']['amount']; ?></td>
        <td><?php echo $this->Form->input('Sponsor.'.$sponsor['Sponsor']['id'].'.active', array(
                'label' => false,
                'checked' => $sponsor['Sponsor']['active'],
                'class' => 'sponsor-active',
                'data-id' => $sponsor['Sponsor']['id'],
            )); ?></td>
        <td><?php echo $this->Html->link('Edit', '/admin/sponsors/edit/' . $sponsor['Sponsor']['id']); ?></td>
        <td><?php echo $this->Html->link('Delete', '/admin/sponsors/delete' . $sponsor['Sponsor']['id']); ?></td>
    </tr>          
<?php endforeach; ?>
</table>
