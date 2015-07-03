<?php
$this->extend('../Layout/TwitterBootstrap/signin');
?>
<div class="users form">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        <?= $this->Form->input('email') ?>
        <?= $this->Form->input('password', ['value' => '']) ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
    <?= ($registerEnabled ? $this->Html->link('Register', ['action' => 'register']) . ' | ' : null) ?>
    <?= $this->Html->link('Forgot password', ['action' => 'forgotPassword']); ?>
</div>