<div class="admin sponsors index">
    <h2>
        <?php echo __('Sponsors'); ?>
        <div class="buttons pull-right">
            <?php echo $this->Html->link('Add Sponsor', [
                'controller' => 'sponsors', 
                'action' => 'add',
                'admin' => true,
            ],[
                'class' => 'btn btn-primary fire-modal', 
                'data-toggle' => 'modal', 
                'data-target' => '.modal',
            ]); ?>
        </div>
    </h2>
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
