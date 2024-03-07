<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Driver $driver
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Driver'), ['action' => 'edit', $driver->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Driver'), ['action' => 'delete', $driver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $driver->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Driver'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Driver'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="driver view content">
            <h3><?= h($driver->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nama') ?></th>
                    <td><?= h($driver->nama) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jenis Kelamin') ?></th>
                    <td><?= h($driver->jenis_kelamin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($driver->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Umur') ?></th>
                    <td><?= $driver->umur === null ? '' : $this->Number->format($driver->umur) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Alamat') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($driver->alamat)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
