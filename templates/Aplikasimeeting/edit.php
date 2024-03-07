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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aplikasimeeting->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aplikasimeeting->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Aplikasimeeting'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aplikasimeeting form content">
            <?= $this->Form->create($aplikasimeeting) ?>
            <fieldset>
                <legend><?= __('Edit Aplikasimeeting') ?></legend>
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
