<div class="panel-group" id="accordion" role="tabList" aria-multiselectable="true">
    <?php $panelCount=1; ?>
    <?php foreach($groupedProducts as $name => $group): ?>
        <div class="panel panel-default">
            <div class="panel-heading" id="heading<?php echo $panelCount; ?>" role="tab">
                <h3 class="panel-title">
                    <?php echo $this->Html->link($this->Form->label($name), '#collapse'.$panelCount, array(
                        'class' => $panelCount==1 ? '' : 'collapsed',
                        'data-toggle' => 'collapse', 
                        'escape' => false, 
                        'data-parent' => '#accordion', 
                        'aria-expanded' => $panelCount==1 ? 'true' : 'false', 
                        'aria-controls' => "collapse$panelCount",
                    )); ?>
                </h3>
            </div>
            <div id="collapse<?php echo $panelCount; ?>" class="panel-collapse collapse<?php echo $panelCount==1 ? ' in' : ''; ?>" role="tabpanel" aria-labelledby="heading<?php echo $panelCount; ?>">
                <div class="panel-body">
                    <?php foreach($group as $id => $product): ?>
                        <?php echo $this->Form->select('Product', array($id => $product), array('multiple' => 'checkbox', 'class' => 'form-control', 'hiddenField' => false)); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php $panelCount++; ?>
    <?php endforeach; ?>
</div>
