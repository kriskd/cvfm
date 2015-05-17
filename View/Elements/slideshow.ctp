<div class="carousel-wrapper">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php for($i=32; $i<34; $i++): ?>
                <div class="item <?php echo $i==32 ? 'active' : ''; ?>">
                    <div class="crop">
                    <?php echo $this->Html->image('pictures/DSC_00'.$i.'.JPG', array('class' => 'img-responsive')); ?>
                    </div>
                </div>
            <?php endfor; ?>
            <?php for($i=37; $i<50; $i++): ?>
                <div class="item">
                    <div class="crop">
                    <?php echo $this->Html->image('pictures/DSC_00'.$i.'.JPG', array('class' => 'img-responsive')); ?>
                    </div>
                </div>
            <?php endfor; ?>
            <?php for($i=383; $i<414; $i++): ?>
                <div class="item">
                    <div class="crop">
                    <?php echo $this->Html->image('pictures/DSC_0'.$i.'.JPG', array('class' => 'img-responsive')); ?>
                    </div>
                </div>
            <?php endfor; ?>
            <?php /*
            <div class="item active">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm01.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm02.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm03.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm04.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm05.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm06.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm07.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm08.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm09.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm10.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm11.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm13.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm14.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm15.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm16.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm17.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
            <div class="item">
                <div class="crop">
                <?php echo $this->Html->image('pictures/fm18.jpg', array('class' => 'img-responsive')); ?>
                </div>
            </div>
             */ ?>
        </div>
        <!-- Controls -->
          <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div> 
</div>
