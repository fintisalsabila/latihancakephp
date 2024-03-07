<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Mobil> $mobil
 */
?>
<div class="mobil index content">
    <?= $this->Html->link(__('New Mobil'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mobil') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nopol') ?></th>
                    <th><?= $this->Paginator->sort('merk_nama') ?></th>
                    <th><?= $this->Paginator->sort('departmen') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('tahun_produksi') ?></th>
                    <th><?= $this->Paginator->sort('warna') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mobil as $mobil): ?>
                <tr>
                    <td><?= $this->Number->format($mobil->id) ?></td>
                    <td><?= h($mobil->nopol) ?></td>
                    <td><?= h($mobil->merk_nama) ?></td>
                    <td><?= h($mobil->departmen) ?></td>
                    <td><?= h($mobil->type) ?></td>
                    <td><?= h($mobil->tahun_produksi) ?></td>
                    <td><?= h($mobil->warna) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mobil->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mobil->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mobil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mobil->id)]) ?>
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
