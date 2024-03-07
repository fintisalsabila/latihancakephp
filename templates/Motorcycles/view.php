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
            <?= $this->Html->link(__('Edit Motorcycle'), ['action' => 'edit', $motorcycle->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Motorcycle'), ['action' => 'delete', $motorcycle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motorcycle->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Motorcycles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Motorcycle'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="motorcycles view content">
            <h3><?= h($motorcycle->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($motorcycle->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code Mtr') ?></th>
                    <td><?= h($motorcycle->code_mtr) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code Ahm') ?></th>
                    <td><?= h($motorcycle->code_ahm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($motorcycle->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type Mtr') ?></th>
                    <td><?= h($motorcycle->type_mtr) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $motorcycle->active === null ? '' : $this->Number->format($motorcycle->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create By') ?></th>
                    <td><?= $motorcycle->create_by === null ? '' : $this->Number->format($motorcycle->create_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modi By') ?></th>
                    <td><?= $motorcycle->modi_by === null ? '' : $this->Number->format($motorcycle->modi_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($motorcycle->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($motorcycle->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
