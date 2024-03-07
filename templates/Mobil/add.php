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
            <?= $this->Html->link(__('List Mobil'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mobil form content">
            <?= $this->Form->create($mobil) ?>
            <fieldset>
                <legend><?= __('Add Mobil') ?></legend>
                <?php
                    echo $this->Form->control('nopol');
                    echo $this->Form->control('merk_nama');
                    echo $this->Form->control('departmen');
                    echo $this->Form->control('type');
                    echo $this->Form->control('tahun_produksi');
                    echo $this->Form->control('warna');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
