<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($article); ?>
    <fieldset>
        <legend><?= __('Add Category') ?></legend>
        <?php
            // ここにカテゴリのコントロールを追加
            echo $this->Form->control('category_id');
            echo $this->Form->control('title');
            echo $this->Form->control('body', ['rows' => '3']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Save Article')); ?>
    <?= $this->Form->end(); ?>
</div>
