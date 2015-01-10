<h2>Login</h2>
<?php
//echo $session->flash('auth');
echo $this->Form->create('User');
$this->Form->inputDefaults(['class' => 'form-control']);
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end(['label' => 'Login', 'class' => 'btn btn-primary']);
?>
<h2>Reset Password</h2>
<?php echo $this->Form->create('User', ['action' => 'reset']); ?>
<?php $this->Form->inputDefaults(['class' => 'form-control']); ?>
<?php echo $this->Form->input('username', ['label' => 'Email']); ?>
<?php echo $this->Form->end(['label' => 'Submit', 'class' => 'btn btn-primary']); ?>
