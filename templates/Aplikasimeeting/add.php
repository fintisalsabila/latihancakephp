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
            <?= $this->Html->link(__('List Aplikasimeeting'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aplikasimeeting form content">
            <?= $this->Form->create($aplikasimeeting) ?>
            <fieldset>
                <legend><?= __('Add Aplikasimeeting') ?></legend>
                <?php
                    echo $this->Form->control('nama');
                    echo $this->Form->control('tanggal', ['empty' => true]);
                    echo $this->Form->control('waktu_mulai', ['empty' => true]);
                    echo $this->Form->control('waktu_selesai', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
