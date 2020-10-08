<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $actor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actor'), ['action' => 'edit', $actor->actor_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actor'), ['action' => 'delete', $actor->actor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $actor->actor_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actor view large-9 medium-8 columns content">
    <h3><?= h($actor->actor_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($actor->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($actor->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actor Id') ?></th>
            <td><?= $this->Number->format($actor->actor_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Update') ?></th>
            <td><?= h($actor->last_update) ?></td>
        </tr>
    </table>
</div>
