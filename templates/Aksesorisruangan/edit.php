<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aksesorisruangan $aksesorisruangan
 * @var string[]|\Cake\Collection\CollectionInterface $ruangan
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aksesorisruangan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aksesorisruangan->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Aksesorisruangan'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aksesorisruangan form content">
            <?= $this->Form->create($aksesorisruangan) ?>
            <fieldset>
                <legend><?= __('Edit Aksesorisruangan') ?></legend>
                <?php
                    echo $this->Form->control('ruangan_id', ['options' => $ruangan, 'empty' => true]);
                    echo $this->Form->control('nama_aksesoris');
                    echo $this->Form->control('jumlah');
                    echo $this->Form->control('kondisi');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
