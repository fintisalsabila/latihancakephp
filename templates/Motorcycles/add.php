<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Motorcycle $motorcycle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Motorcycles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="motorcycles form content">
            <?= $this->Form->create($motorcycle) ?>
            <fieldset>
                <legend><?= __('Add Motorcycle') ?></legend>
                <?php
                    echo $this->Form->control('code_mtr');
                    echo $this->Form->control('code_ahm');
                    echo $this->Form->control('name');
                    echo $this->Form->control('type_mtr');
                    echo $this->Form->control('active');
                    echo $this->Form->control('create_by');
                    echo $this->Form->control('modi_by');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
