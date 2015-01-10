<h2>Login</h2>
<?php
echo $this->Form->create('User');
$this->Form->inputDefaults(['class' => 'form-control']);
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end(['label' => 'Login', 'class' => 'btn btn-primary']);
echo $this->Html->link('Reset Password', ['action' => 'reset']);
?>
