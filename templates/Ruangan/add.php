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
            <?= $this->Html->link(__('List Ruangan'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ruangan form content">
            <?= $this->Form->create($ruangan) ?>
            <fieldset>
                <legend><?= __('Add Ruangan') ?></legend>
                <?php
                    echo $this->Form->control('nomor_ruangan');
                    echo $this->Form->control('luas');
                    echo $this->Form->control('lantai');
                    echo $this->Form->control('deskripsi');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
