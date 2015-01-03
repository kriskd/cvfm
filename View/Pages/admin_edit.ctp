<div class="admin pages edit">
    <?php echo $this->Form->create('Page'); ?>
        <fieldset>
            <legend><?php echo __('Edit About Us'); ?></legend>
        <?php
        echo $this->Form->input('val', [
            'class' => 'form-control',
            'label' => false,
        ]);
        ?>
        </fieldset>
    <?php echo $this->Form->end(['label' => __('Save'), 'class' => 'btn btn-primary']); ?>
</div>
