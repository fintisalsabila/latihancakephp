<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ruangan> $ruangan
 */
?>
<div class="ruangan index content">
    <?= $this->Html->link(__('New Ruangan'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ruangan') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nomor_ruangan') ?></th>
                    <th><?= $this->Paginator->sort('luas') ?></th>
                    <th><?= $this->Paginator->sort('lantai') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ruangan as $ruangan): ?>
                <tr>
                    <td><?= $this->Number->format($ruangan->id) ?></td>
                    <td><?= h($ruangan->nomor_ruangan) ?></td>
                    <td><?= $ruangan->luas === null ? '' : $this->Number->format($ruangan->luas) ?></td>
                    <td><?= $ruangan->lantai === null ? '' : $this->Number->format($ruangan->lantai) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ruangan->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ruangan->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ruangan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ruangan->id)]) ?>
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
