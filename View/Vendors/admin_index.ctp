<div class="admin vendors index">
    <p><?php echo $this->Html->link('Add vendor', array(
            'action' => 'add',
            'admin' => true,
        )); ?></p>
    <div class="table">
        <div class="table-row">
            <span class="table-head"><?php echo $this->Paginator->sort('business_name'); ?></span>
            <span class="table-head"><?php echo $this->Paginator->sort('location'); ?></span>
            <span class="table-head"><?php echo $this->Paginator->sort('website'); ?></span>
            <span class="table-head"><?php echo $this->Paginator->sort('active'); ?></span>
        </div>
        <?php foreach($vendors as $vendor): ?>
            <?php $cells = $this->Html->tag('span', $vendor['Vendor']['business_name'], ['class' => 'table-cell']); ?>
            <?php $cells .= $this->Html->tag('span', empty($vendor['Vendor']['location']) ? "&nbsp;" : $vendor['Vendor']['location'], ['class' => 'table-cell']); ?>
            <?php $cells .= $this->Html->tag('span', empty($vendor['Vendor']['website']) ? "&nbsp;" : $vendor['Vendor']['website'], ['class' => 'table-cell']); ?>
            <?php $checkbox = $this->Form->input('Vendor.'.$vendor['Vendor']['id'].'.active', array(
                'label' => false,
                'checked' => $vendor['Vendor']['active'],
                'class' => 'vendor-active',
                'data-id' => $vendor['Vendor']['id'],
                'div' => false,
            )); ?>
            <?php $cells .= $this->Html->tag('span', $checkbox, ['class' => 'table-cell text-center']); ?>
            <?php echo $this->Html->link($cells, ['action' => 'edit', $vendor['Vendor']['id']], ['class' => 'table-row', 'escape' => false]); ?>
        <?php endforeach; ?>
    </div>
    <?php echo $this->Element('paginator'); ?>
</div>
