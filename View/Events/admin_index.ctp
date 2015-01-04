<div class="admin events index">
    <h2>
        <?php echo __('Events'); ?>
        <div class="buttons pull-right">
            <?php echo $this->Html->link('Add Event', [
                'controller' => 'events',
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
                <span class="table-head"><?php echo $this->Paginator->sort('date'); ?></span>
                <span class="table-head"><?php echo $this->Paginator->sort('description'); ?></span>
            </div>
            <?php foreach ($events as $event): ?>
                <?php $cells = $this->Html->tag('span', date('F j, Y', strtotime($event['Event']['date'])), ['class' => 'table-cell']); ?>
                <?php $cells .= $this->Html->tag('span', $event['Event']['description'], ['class' => 'table-cell']); ?>
                <?php echo $this->Html->link($cells, ['action' => 'edit', $event['Event']['id']], ['class' => 'table-row', 'escape' => false]); ?>
            <?php endforeach; ?>
        </div>
    </div>
    <?php echo $this->Element('paginator'); ?>
</div>
