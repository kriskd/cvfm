<div class="admin sponsors index">
    <div class="buttons">
        <?php echo $this->Html->link('Back', '/admin/sponsors', ['class' => 'btn btn-info']); ?>
        <?php echo $this->Html->link('Add Sponsor', '/admin/sponsors/add', array('class' => 'btn btn-primary fire-modal', 'data-action' => 'sponsors/add', 'data-toggle' => 'modal', 'data-target' => '.modal')); ?>
    </div>
    <div class="table">
        <div class="table-row">
            <span class="table-head"><?php echo $this->Paginator->sort('name'); ?></span>
            <span class="table-head"><?php echo $this->Paginator->sort('website'); ?></span>
            <span class="table-head"><?php echo $this->Paginator->sort('amount'); ?></span>
            <span class="table-head"><?php echo $this->Paginator->sort('active'); ?></span>
        </div>
    <?php foreach($sponsors as $sponsor): ?>
        <?php $cells = $this->Html->tag('span', $sponsor['Sponsor']['name'], ['class' => 'table-cell']); ?>
        <?php $cells .= $this->Html->tag('span', $sponsor['Sponsor']['website'], ['class' => 'table-cell']); ?>
        <?php $cells .= $this->Html->tag('span', empty($sponsor['Sponsor']['amount']) ? "&nbsp;" : $sponsor['Sponsor']['amount'], ['class' => 'table-cell text-right']); ?>
        <?php $checkbox = $this->Form->input('Sponsor.'.$sponsor['Sponsor']['id'].'.active', array(
            'label' => false,
            'checked' => $sponsor['Sponsor']['active'],
            'class' => 'sponsor-active',
            'data-id' => $sponsor['Sponsor']['id'],
            'div' => false,
        )); ?>
        <?php $cells .= $this->Html->tag('span', $checkbox, ['class' => 'table-cell text-center']); ?>
        <?php echo $this->Html->link($cells, ['action' => 'edit', $sponsor['Sponsor']['id']], ['class' => 'table-row', 'escape' => false]); ?>
    <?php endforeach; ?>
    </div>
    <?php echo $this->Element('paginator'); ?>
</div>
