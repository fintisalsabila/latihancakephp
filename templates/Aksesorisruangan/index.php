<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Aksesorisruangan> $aksesorisruangan
 */
?>
<div class="aksesorisruangan index content">
    <?= $this->Html->link(__('New Aksesoris ruangan'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aksesoris ruangan') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ruangan_id') ?></th>
                    <th><?= $this->Paginator->sort('nama_aksesoris') ?></th>
                    <th><?= $this->Paginator->sort('jumlah') ?></th>
                    <th><?= $this->Paginator->sort('kondisi') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aksesorisruangan as $aksesorisruangan): ?>
                <tr>
                    <td><?= $this->Number->format($aksesorisruangan->id) ?></td>
                    <td><?= $aksesorisruangan->has('ruangan') ? $this->Html->link($aksesorisruangan->ruangan->id, ['controller' => 'Ruangan', 'action' => 'view', $aksesorisruangan->ruangan->id]) : '' ?></td>
                    <td><?= h($aksesorisruangan->nama_aksesoris) ?></td>
                    <td><?= $aksesorisruangan->jumlah === null ? '' : $this->Number->format($aksesorisruangan->jumlah) ?></td>
                    <td><?= h($aksesorisruangan->kondisi) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aksesorisruangan->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aksesorisruangan->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aksesorisruangan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aksesorisruangan->id)]) ?>
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
