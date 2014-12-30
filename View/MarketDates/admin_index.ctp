<?php // I could not get this to work with just $this->request->data, had to set values ?>
<?php echo $this->Form->create('MarketDate'); ?>
    <?php foreach ($marketDates as $date): ?>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <?php echo $date['MarketDate']['description']; ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <?php echo $this->Form->input('MarketDate.'.$date['MarketDate']['id'].'.id', array(
                    'value' => $date['MarketDate']['id'], 
                )); ?>
                <?php echo $this->Form->input('MarketDate.'.$date['MarketDate']['id'].'.pick', array(
                    'label' => false,
                    'type' => 'text',
                    'class' => 'form-control market-date',
                    'data-date-format' => 'MM/DD/YYYY',
                    'value' => date('m/d/Y', strtotime($date['MarketDate']['date'])),
                )); ?>
                <?php echo $this->Form->input('MarketDate.'.$date['MarketDate']['id'].'.date', array(
                    'label' => false,
                    'type' => 'hidden',
                    'value' => $date['MarketDate']['date']
                )); ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php echo $this->Form->end('Save'); ?>
