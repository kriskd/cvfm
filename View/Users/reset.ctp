<h2>Reset Password</h2>
<?php echo $this->Form->create(); ?>
<?php $this->Form->inputDefaults([
    'class' => 'form-control',
    'error' => [
        'attributes' => [
            'class' => 'error-message label label-danger'
        ],
    ]
]); ?>
<?php if (empty($this->request->params['pass'])): ?>
    <?php echo $this->Form->input('username', [
        'label' => 'Email',
    ]); ?>
<?php else: ?>
    <?php echo $this->Form->input('password', [
        'label' => 'New Password',
    ]); ?>
    <?php echo $this->Form->input('confirm_password', [
        'label' => 'Repeat Password', 
        'type' => 'password',
    ]); ?>
<?php endif; ?>
<?php echo $this->Form->end(['label' => 'Submit', 'class' => 'btn btn-primary']); ?>
