<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $title_for_layout; ?></title>
    <?php echo $this->Html->charset(); ?>
    <?php if(dev() == false): ?>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-9944268-4']);
            _gaq.push(['_trackPageview']);
          
            (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    <?php endif; ?>
    <?php echo $this->Html->meta('favicon.ico', '/favicon.ico', array('type' => 'icon'));?>
    <?php
    echo $this->Html->css('/css/build/styles.min');

    echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js');
    //echo $this->Html->script('jquery.galleriffic.js');
    echo $this->Html->script('/js/build/scripts.min');
    ?>

</head>
<body>
    <?php echo $this->Session->flash(); ?>
        <?php $user = $this->Session->read('Auth.User'); ?>
        <?php if(isset($user)): ?>
            <div id="admin-inner">
                <?php echo $this->element('admin_menu'); ?>
            </div>
        <?php endif; ?>
        <div id="main">
            <?php echo $this->Element('header'); ?>
            <div id="left">
                <div id="slideshow">
                    <?php echo $this->element('slideshow'); ?>
                </div>
            </div>
            <div id="right">
                <div id="content">
                    <div id="content-inner">
                        <?php echo $content_for_layout; ?>
                    </div>
                    <?php echo $this->element('footer'); ?>
                </div>
            </div>
    </div>
    <?php //echo $this->element('sql_dump'); ?>
</body>
</html>