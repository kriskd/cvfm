<div class="admin schedules index">
    <?php // I could not get this to work with just $this->request->data, had to set values ?>
    <h2>Create the schedule for <?php echo $fiscalYear; ?></h2>
    <?php echo $this->Form->create('Schedule'); ?>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                Start Date
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                End Date
            </div>
        </div>
        <?php foreach ($schedules as $date): ?>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <?php echo $date['Schedule']['description']; ?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <?php echo $this->Form->input('Schedule.'.$date['Schedule']['id'].'.id', array(
                        'value' => $date['Schedule']['id'], 
                    )); ?>
                    <?php echo $this->Form->input('Schedule.'.$date['Schedule']['id'].'.start_pick', array(
                        'label' => false,
                        'type' => 'text',
                        'class' => 'form-control schedule-date',
                        'data-date-format' => 'MM/DD/YYYY',
                        'value' => empty($date['Schedule']['start_date']) ? '' : date('m/d/Y', strtotime($date['Schedule']['start_date'])),
                    )); ?>
                    <?php echo $this->Form->input('Schedule.'.$date['Schedule']['id'].'.start_date', array(
                        'label' => false,
                        'type' => 'hidden',
                        'value' => $date['Schedule']['start_date']
                    )); ?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <?php echo $this->Form->input('Schedule.'.$date['Schedule']['id'].'.id', array(
                        'value' => $date['Schedule']['id'], 
                    )); ?>
                    <?php echo $this->Form->input('Schedule.'.$date['Schedule']['id'].'.end_pick', array(
                        'label' => false,
                        'type' => 'text',
                        'class' => 'form-control schedule-date',
                        'data-date-format' => 'MM/DD/YYYY',
                        'value' => empty($date['Schedule']['end_date']) ? '' : date('m/d/Y', strtotime($date['Schedule']['end_date'])),
                    )); ?>
                    <?php echo $this->Form->input('Schedule.'.$date['Schedule']['id'].'.end_date', array(
                        'label' => false,
                        'type' => 'hidden',
                        'value' => $date['Schedule']['end_date']
                    )); ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php echo $this->Form->button('Clear Dates', array(
        'class' => 'btn btn-info clear-schedule',
        'type' => 'button'
    )); ?>
    <?php echo $this->Form->end(['label' => 'Save', 'class' => 'btn btn-primary']); ?>
</div>
