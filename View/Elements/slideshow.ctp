<div class="carousel-wrapper">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php foreach ($images as $i => $image): ?>
                <?php $path = WWW_ROOT . 'img' . DS . 'pictures' . DS . $image ?>
                <?php if (file_exists($path) && !is_dir($path)): ?>
                    <div class="item <?php echo $i == 0 ? 'active' : ''; ?>">
                        <div class="crop">
                            <?= $this->Html->image('pictures' . DS . $image, ['class' => 'img-responsive']); ?>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
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
