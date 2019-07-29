<?php $__env->startSection('template_title'); ?>
    My Task List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_fastload_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Locales
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>

    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="<?php echo e(url('/')); ?>">
            <span itemprop="name">
                <?php echo e(trans('titles.app')); ?>

            </span>
        </a>
        <i class="material-icons">chevron_right</i>
        <meta itemprop="position" content="1" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="active">
        <a itemprop="item" href="" class="">
            <span itemprop="name">
                Locales
            </span>
        </a>
        <meta itemprop="position" content="2" />
    </li>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if(count($local) > 0): ?>
    


        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">

            <div class="mdl-tabs__tab-bar">
                <a href="#all" class="mdl-tabs__tab is-active">All</a>
                <a href="#incomplete" class="mdl-tabs__tab">Incomplete</a>
                <a href="#complete" class="mdl-tabs__tab">Complete</a>
            </div>

           
        

        </div>

        <?php echo $__env->make('dialogs.dialog-delete', ['dialogTitle' => 'Confirm Task Deletion', 'dialogSaveBtnText' => 'Delete'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php endif; ?>

  

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>