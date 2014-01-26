<div class="vendors add">
    <?php echo $this->Form->create(); ?>
    <?php $this->Form->inputDefaults(array('class' => 'form-control')); ?>
    <?php echo $this->Form->input('name', array('label' => 'Proprietor\'s Name')); ?>
    <?php echo $this->Form->input('business_name'); ?>
    <?php echo $this->Form->input('address'); ?>
    <?php echo $this->Form->input('city'); ?>
    <?php echo $this->Form->input('state', array('options' => $states, 'selected' => 'WI')); ?>
    <?php echo $this->Form->input('postal_code'); ?>
    <?PHP echo $this->Form->input('email'); ?>
    <?php echo $this->Form->input('website'); ?>
    <?php echo $this->Form->input('ebt', array('label' => 'Can you accept EBT/Food Share/WIC', 'class' => '')); ?>
    <?php echo $this->Form->input('description'); ?>
    <?php echo $this->Form->input('organize', array('label' => 'I would like to help organize a special event', 'class' => '')); ?>
    <?php echo $this->Form->input('donate', array('label' => 'I would like to donate something to a special event', 'class' => '')); ?>
    <?php echo $this->Form->input('comments', array('label' => 'Comments/Suggestions')); ?>
    <?php echo $this->Form->input('schedule_id', array('options' => $schedules)); ?>
    <?php foreach($groupedProducts as $name => $group): ?>
        <?php echo $this->Form->label($name); ?>
        <?php foreach($group as $id => $product): ?>
            <?php echo $this->Form->input('Vendor.product_type.', array('label' => $product, 'type' => 'checkbox', 'class' => '')); ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <?php echo $this->Form->input('agree', array('label' => 'I have read the rules and bylaws and agree to them.', 'class' => '')); ?>
    <?php echo $this->Form->input('Card.number', array(
                                                    'name' => false,
                                                    'data-stripe' => 'number',
                                                    'autocomplete' => 'off',
                                                    'placeHolder' => 'Card Number',
                                                    'class' => 'card-number form-control',
                                                    'label' => array('text' => 'Card Number<br /><small>(no spaces or hypens)</small>',
                                                                     //'class' => 'control-label col-xs-11 col-sm-4 col-md-4 col-lg-4'
                                                                     ),
                                                    'div' => array('class' => 'card-number-div input required'),
                                                    'required' => 'required',
                                                    'value' => prod()==false ? '4242424242424242' : '',
                                                    //'between' => '<div class="col-xs-11 col-sm-7 col-md-7 col-lg-7">',
                                                    //'after' => '</div>'
                                                )); ?>
    <?php echo $this->Form->input('Card.cvc', array(
                                                    'name' => false,
                                                    'data-stripe' => 'cvc',
                                                    'autocomplete' => 'off',
                                                    'placeHolder' => 'CVC',
                                                    'class' => 'card-cvc form-control',
                                                    'label' => array('text' => 'CVC <a class="launch-tooltip"
                                                                                data-toggle="tooltip" data-placement="top"
                                                                                title="The CVC is the three-digit number
                                                                                that appears on the reverse side of your
                                                                                credit/debit card.">
                                                                                <span class="glyphicon glyphicon-question-sign"></span>
                                                                                </a>',
                                                                     //'class' => 'control-label col-xs-11 col-sm-4 col-md-4 col-lg-4'
                                                                     ),
                                                    'div' => array('class' => 'cvc-div input required'),
                                                    'required' => 'required',
                                                    'value' => prod()==false ? '123' : '',
                                                    //'between' => '<div class="col-xs-11 col-sm-7 col-md-7 col-lg-7">',
                                                    //'after' => '</div>'
                                                )); ?>
    <?php echo $this->Form->label('Expiration'); ?>
    <div class="row">
        <?php echo $this->Form->input('Card.month', array(
                                            'name' => false,
                                            'empty' => 'MM',
                                            'options' => $months,
                                            'data-stripe' => 'exp-month',
                                            'class' => 'form-control card-expiry-month',
                                            'label' => false,
                                            'multiple' => false,
                                            'div' => 'col-xs-6 col-sm-6 col-md-6 col-lg-6',
                                            'value' => prod()==false ? '12' : '',
                                            )); ?>
                                        
        <?php echo $this->Form->input('Card.year', array(
                                            'name' => false,
                                            'empty' => 'Year',
                                            'options' => $years,
                                            'data-stripe' => 'exp-year',
                                            'placeHolder' => 'Year',
                                            'class' => 'card-expiry-year form-control',
                                            'label' => false,
                                            'multiple' => false,
                                            'div' => 'col-xs-6 col-sm-6 col-md-6 col-lg-6',
                                            'value' => prod()==false ? '2023' : '',
                                            )); ?>
    </div>
    <?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-default')); ?>
</div>

<?php $mode = Configure::read('Stripe.mode'); ?>
 
<?php $this->append('script'); ?>
    <?php echo $this->Html->script('https://js.stripe.com/v2/'); ?>
    <?php echo '<script type="text/javascript">Stripe.setPublishableKey("' . Configure::read('Stripe.' . $mode . 'Publishable') . '");</script>'; ?>
    <script type="text/javascript">
        $(document).ready(function(){
            Stripe.setPublishableKey("<?php echo Configure::read('Stripe.' . $mode . 'Publishable'); ?>")
        });
    </script>
<?php $this->end(); ?>