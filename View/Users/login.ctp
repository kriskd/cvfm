<?php
//echo $session->flash('auth');
echo $this->Form->create('User', array('action' => 'login'));
$this->Form->inputDefaults(['class' => 'form-control']);
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end(['label' => 'Login', 'class' => 'btn btn-primary']);
