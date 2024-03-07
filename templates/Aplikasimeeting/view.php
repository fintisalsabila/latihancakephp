<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aplikasimeeting $aplikasimeeting
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aplikasimeeting'), ['action' => 'edit', $aplikasimeeting->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aplikasimeeting'), ['action' => 'delete', $aplikasimeeting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aplikasimeeting->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aplikasimeeting'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aplikasimeeting'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aplikasimeeting view content">
            <h3><?= h($aplikasimeeting->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nama') ?></th>
                    <td><?= h($aplikasimeeting->nama) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aplikasimeeting->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tanggal') ?></th>
                    <td><?= h($aplikasimeeting->tanggal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Waktu Mulai') ?></th>
                    <td><?= h($aplikasimeeting->waktu_mulai) ?></td>
                </tr>
                <tr>
                    <th><?= __('Waktu Selesai') ?></th>
                    <td><?= h($aplikasimeeting->waktu_selesai) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
