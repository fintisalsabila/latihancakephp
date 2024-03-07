<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mobil $mobil
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Mobil'), ['action' => 'edit', $mobil->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mobil'), ['action' => 'delete', $mobil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mobil->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mobil'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mobil'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mobil view content">
            <h3><?= h($mobil->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nopol') ?></th>
                    <td><?= h($mobil->nopol) ?></td>
                </tr>
                <tr>
                    <th><?= __('Merk Nama') ?></th>
                    <td><?= h($mobil->merk_nama) ?></td>
                </tr>
                <tr>
                    <th><?= __('Departmen') ?></th>
                    <td><?= h($mobil->departmen) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($mobil->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tahun Produksi') ?></th>
                    <td><?= h($mobil->tahun_produksi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Warna') ?></th>
                    <td><?= h($mobil->warna) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mobil->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
