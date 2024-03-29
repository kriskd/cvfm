<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Capitol View Farmers' Market <?php echo empty($this->fetch('title')) ? '' : ': '.$this->fetch('title'); ?></title>
    <?php echo $this->Html->charset(); ?>
    <?php if (Configure::read('env') == 'prod'): ?>
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
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
    <?php echo $this->Html->meta('favicon.ico', '/favicon.ico', array('type' => 'icon'));?>
    <?php
    //echo $this->Html->css('/css/build/jquery-ui-1.10.4.custom.min');
    echo $this->Html->css('/css/build/styles.min');

    echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
    //echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');
    //echo $this->Html->script('jquery.galleriffic.js');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->Html->script('/js/build/scripts.min');
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <?php echo $this->Session->flash(); ?>
        <?php $user = $this->Session->read('Auth.User'); ?>
        <?php if(isset($user)): ?>
            <div id="admin-inner">
                <?php //echo $this->element('admin_menu'); ?>
            </div>
        <?php endif; ?>
        <div class="container-fluid">
            <?php echo $this->Element('header'); ?>
            <div class="content">
                <?php echo $content_for_layout; ?>
            </div>
            <?php echo $this->element('footer'); ?>
    </div>
    <?php //echo $this->element('sql_dump'); ?>
</body>
</html>
