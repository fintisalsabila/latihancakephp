<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aplikasimeeting> $aplikasimeeting
 */
?>
<div class="aplikasimeeting index content">
    <?= $this->Html->link(__('New Aplikasimeeting'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aplikasimeeting') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nama') ?></th>
                    <th><?= $this->Paginator->sort('tanggal') ?></th>
                    <th><?= $this->Paginator->sort('waktu_mulai') ?></th>
                    <th><?= $this->Paginator->sort('waktu_selesai') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aplikasimeeting as $aplikasimeeting): ?>
                <tr>
                    <td><?= $this->Number->format($aplikasimeeting->id) ?></td>
                    <td><?= h($aplikasimeeting->nama) ?></td>
                    <td><?= h($aplikasimeeting->tanggal) ?></td>
                    <td><?= h($aplikasimeeting->waktu_mulai) ?></td>
                    <td><?= h($aplikasimeeting->waktu_selesai) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aplikasimeeting->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aplikasimeeting->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aplikasimeeting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aplikasimeeting->id)]) ?>
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
