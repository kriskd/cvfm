<p><?php echo $this->Html->link('Add vendor', array(
        'action' => 'add',
        'admin' => true,
    )); ?></p>
<table>
<?php echo $this->Form->create('Vendor'); ?>
<?php foreach($vendors as $vendor): ?>
    <tr><td><?php echo $vendor['Vendor']['business_name'];?></td>
        <td><?php echo $vendor['Vendor']['location']; ?></td>
        <td><?php echo $vendor['Vendor']['website']; ?></td>
        <td>
            <?php echo $this->Form->input('Vendor.'.$vendor['Vendor']['id'].'.active', array(
                'label' => false,
                'checked' => $vendor['Vendor']['active'],
                'class' => 'vendor-active',
                'data-id' => $vendor['Vendor']['id'],
            )); ?>
        </td>
        <td><?php echo $vendor['Schedule']['short']; ?></td>
        <td>
            <?php echo $this->Html->link('Edit', array(
                'controller' => 'vendors',
                'action' => 'edit', $vendor['Vendor']['id']
            )); ?>
        </td>
        <td>
            <?php echo $this->Html->link('Delete', array(
                'controller' => 'vendors',
                'action' => 'delete', $vendor['Vendor']['id']
            )); ?>
        </td>
    </tr>          
<?php endforeach; ?>
<?php $this->Form->end(); ?>
</table>
