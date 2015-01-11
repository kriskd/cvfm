<div class="admin staffs index">
    <h2>
        <?php echo __('Staff'); ?>
        <div class="buttons pull-right">
            <?php echo $this->Html->link('Add Staff', [
                'controller' => 'staffs',
                'action' => 'add',
                'admin' => true,
            ],[
                'class' => 'btn btn-primary fire-modal',
                'data-toggle' => 'modal', 
                'data-target' => '.modal',
            ]); ?>
        </div>
    </h2>
    <div class="col-lg-8 col-md-9 col-sm-10">
        <div class="table">
            <div class="table-row">
                <span class="table-head"><?php echo $this->Paginator->sort('last_name', 'Name'); ?></span>
                <span class="table-head"><?php echo $this->Paginator->sort('role'); ?></span>
            </div>
            <?php foreach ($staffs as $staff): ?>
                <?php $cells = $this->Html->tag('span', $staff['Staff']['full_name'], ['class' => 'table-cell']); ?>
                <?php $cells .= $this->Html->tag('span', ucfirst($staff['Staff']['role']), ['class' => 'table-cell']); ?>
                <?php echo $this->Html->link($cells, ['action' => 'edit', $staff['Staff']['id']], ['class' => 'table-row', 'escape' => false]); ?>
            <?php endforeach; ?>
        </div>
    </div>
    <?php echo $this->Element('paginator'); ?>
</div>
