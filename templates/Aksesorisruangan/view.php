<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aksesorisruangan $aksesorisruangan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aksesorisruangan'), ['action' => 'edit', $aksesorisruangan->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aksesorisruangan'), ['action' => 'delete', $aksesorisruangan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aksesorisruangan->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aksesorisruangan'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aksesorisruangan'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aksesorisruangan view content">
            <h3><?= h($aksesorisruangan->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ruangan') ?></th>
                    <td><?= $aksesorisruangan->has('ruangan') ? $this->Html->link($aksesorisruangan->ruangan->id, ['controller' => 'Ruangan', 'action' => 'view', $aksesorisruangan->ruangan->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nama Aksesoris') ?></th>
                    <td><?= h($aksesorisruangan->nama_aksesoris) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kondisi') ?></th>
                    <td><?= h($aksesorisruangan->kondisi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aksesorisruangan->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jumlah') ?></th>
                    <td><?= $aksesorisruangan->jumlah === null ? '' : $this->Number->format($aksesorisruangan->jumlah) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
