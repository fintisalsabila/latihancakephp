<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ruangan $ruangan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ruangan'), ['action' => 'edit', $ruangan->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ruangan'), ['action' => 'delete', $ruangan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ruangan->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ruangan'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ruangan'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ruangan view content">
            <h3><?= h($ruangan->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nomor Ruangan') ?></th>
                    <td><?= h($ruangan->nomor_ruangan) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ruangan->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Luas') ?></th>
                    <td><?= $ruangan->luas === null ? '' : $this->Number->format($ruangan->luas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lantai') ?></th>
                    <td><?= $ruangan->lantai === null ? '' : $this->Number->format($ruangan->lantai) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Deskripsi') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ruangan->deskripsi)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Aksesorisruangan') ?></h4>
                <?php if (!empty($ruangan->aksesorisruangan)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Ruangan Id') ?></th>
                            <th><?= __('Nama Aksesoris') ?></th>
                            <th><?= __('Jumlah') ?></th>
                            <th><?= __('Kondisi') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ruangan->aksesorisruangan as $aksesorisruangan) : ?>
                        <tr>
                            <td><?= h($aksesorisruangan->id) ?></td>
                            <td><?= h($aksesorisruangan->ruangan_id) ?></td>
                            <td><?= h($aksesorisruangan->nama_aksesoris) ?></td>
                            <td><?= h($aksesorisruangan->jumlah) ?></td>
                            <td><?= h($aksesorisruangan->kondisi) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Aksesorisruangan', 'action' => 'view', $aksesorisruangan->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Aksesorisruangan', 'action' => 'edit', $aksesorisruangan->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aksesorisruangan', 'action' => 'delete', $aksesorisruangan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aksesorisruangan->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
