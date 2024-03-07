<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Motorcycle> $motorcycles
 */
?>
<div class="motorcycles index content">
    <?= $this->Html->link(__('New Motorcycle'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Motorcycles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('code_mtr') ?></th>
                    <th><?= $this->Paginator->sort('code_ahm') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('type_mtr') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('create_by') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modi_by') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($motorcycles as $motorcycle): ?>
                <tr>
                    <td><?= h($motorcycle->id) ?></td>
                    <td><?= h($motorcycle->code_mtr) ?></td>
                    <td><?= h($motorcycle->code_ahm) ?></td>
                    <td><?= h($motorcycle->name) ?></td>
                    <td><?= h($motorcycle->type_mtr) ?></td>
                    <td><?= $motorcycle->active === null ? '' : $this->Number->format($motorcycle->active) ?></td>
                    <td><?= $motorcycle->create_by === null ? '' : $this->Number->format($motorcycle->create_by) ?></td>
                    <td><?= h($motorcycle->created) ?></td>
                    <td><?= $motorcycle->modi_by === null ? '' : $this->Number->format($motorcycle->modi_by) ?></td>
                    <td><?= h($motorcycle->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $motorcycle->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $motorcycle->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $motorcycle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motorcycle->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
