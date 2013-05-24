<?php //var_dump($this->Session->read('Auth.User')); ?>
<?php echo $this->Html->link('Add another product', array('controller' => 'products', 'action' => 'add', 'admin' => true)); ?>
<?php echo $this->Html->link('Delete product', array('controller' => 'products', 'action' => 'delete', $product['Product']['id'], 'admin' => true), array('class' => 'confirm')); ?>
<?php echo $this->Form->create('Product'); ?>
<?php echo $this->Form->hidden('id', array('value' => $product['Product']['id'])); ?>
<?php echo $this->Form->label('Name:'); ?>
<?php echo $this->Form->text('name', array('value' => $product['Product']['name'])); ?>
<?php echo $this->Form->label('Product Type:'); ?>
<?php echo $this->Form->input('product_type', array('options' => $product_types, 'selected' => $product['Product']['product_type'])); ?>
<p>Months in season:</p>
<?php echo $this->Form->input('Month',
                              array('type' => 'select',
                                    'multiple' => 'checkbox',
                                    'options' => $months,
                                    'selected' => $selected_months)); ?>         
<?php echo $this->Form->submit('Update'); ?>
<?php echo $this->Form->end(); ?>


<?php // <input id="MonthMonth1" type="checkbox" value="1" name="data[Month][Month][]"> ?>