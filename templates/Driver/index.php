<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Driver> $driver
 */
?>
<div class="driver index content">
    <?= $this->Html->link(__('New Driver'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Driver') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nama') ?></th>
                    <th><?= $this->Paginator->sort('umur') ?></th>
                    <th><?= $this->Paginator->sort('jenis_kelamin') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($driver as $driver): ?>
                <tr>
                    <td><?= $this->Number->format($driver->id) ?></td>
                    <td><?= h($driver->nama) ?></td>
                    <td><?= $driver->umur === null ? '' : $this->Number->format($driver->umur) ?></td>
                    <td><?= h($driver->jenis_kelamin) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $driver->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $driver->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $driver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $driver->id)]) ?>
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
