<div class="admin events index">
	<h2><?php echo __('Events'); ?></h2>
    <div class="buttons">
        <?php echo $this->Html->link('Add Event', [
            'action' => 'add',
        ],[
            'class' => 'btn btn-primary'
        ]); ?>
    </div>
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
</div>
