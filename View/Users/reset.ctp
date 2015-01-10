<h2>Reset Password</h2>
<?php echo $this->Form->create(); ?>
<?php $this->Form->inputDefaults(['class' => 'form-control']); ?>
<?php if (empty($this->request->params['pass'])): ?>
    <?php echo $this->Form->input('username', [
        'label' => 'Email',
        'error' => [
            'attributes' => [
                'class' => 'error-message label label-danger'
            ],
        ]
    ]); ?>
<?php else: ?>
    <?php echo $this->Form->input('password', [
        'label' => 'New Password',
        'error' => [
            'attributes' => [
                'class' => 'error-message label label-danger'
            ],
        ]
    ]); ?>
    <?php echo $this->Form->input('confirm_password', [
        'label' => 'Repeat Password', 
        'type' => 'password',
        'error' => [
            'attributes' => [
                'class' => 'error-message label label-danger'
            ],
        ]
    ]); ?>
<?php endif; ?>
<?php echo $this->Form->end(['label' => 'Save', 'class' => 'btn btn-primary']); ?>
