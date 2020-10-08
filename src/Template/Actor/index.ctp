
<?= $this->Html->link(__('New Actor'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>

<div class="actor index large-9 medium-8 columns content">
    <h3><?= __('Actor') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('actor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_update') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actor as $actor): ?>
            <tr>
                <td><?= $this->Number->format($actor->actor_id) ?></td>
                <td><?= h($actor->first_name) ?></td>
                <td><?= h($actor->last_name) ?></td>
                <td><?= h($actor->last_update) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actor->actor_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actor->actor_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actor->actor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $actor->actor_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="row">
    <div class="col-md-6">
        <?= $this->Paginator->counter(
            'Page {{page}} of {{pages}}, showing {{current}} records out of
            {{count}} total, starting on record {{start}}, ending on {{end}}'
        ) ?>
    </div>
    <div class="col-md-6 text-right">
        <?= $this->Paginator->numbers([
            'first' => __('First'),
            'last' => __('Last')

        ]) ?>
    </div>
</div>

<style type="text/css">
    ul.pagination {
        margin: 0;
    }
</style>
</div>

<?= $this->Form->button('i:pencil') ?>
<?php
echo $this->Html->badge('1') ;
echo $this->Html->badge('2') ;
echo $this->Html->badge('3') ;