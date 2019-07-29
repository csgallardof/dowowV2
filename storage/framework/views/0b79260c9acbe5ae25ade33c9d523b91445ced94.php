<?php $__env->startSection('template_title'); ?>
  Mostrar Local
<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_linked_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Locales Comerciales
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo e(url('/')); ?>">
            <span itemprop="name">
                <?php echo e(trans('titles.app')); ?>

            </span>
        </a>
        <i class="material-icons">chevron_right</i>
        <meta itemprop="position" content="1" />
    </li>
    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="/users" disabled>
            <span itemprop="name">
                Locales
            </span>
        </a>
        <meta itemprop="position" content="2" />
    </li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--12-col-desktop margin-top-0">
    <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
        <h2 class="mdl-card__title-text logo-style">
           Detalle de Locales
        </h2>

    </div>
    <div class="mdl-card__supporting-text mdl-color-text--grey-600 padding-0 context">
        <div class="table-responsive material-table">
            <table id="user_table" class="mdl-data-table mdl-js-data-table data-table" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">ID</th>
                    <th class="mdl-data-table__cell--non-numeric">Local</th>
                    <th class="mdl-data-table__cell--non-numeric">Descripcion</th>
                    <th class="mdl-data-table__cell--non-numeric no-sort no-search">Actions</th>
                </tr>
              </thead>
              <tbody>
                    <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $local): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric"><a href="<?php echo e(URL::to('locales/' . $local->id)); ?>"><?php echo e($local->id); ?></a></td>
                            <td class="mdl-data-table__cell--non-numeric"><a href="<?php echo e(URL::to('locales/' . $local->id)); ?>"><?php echo e($local->nombre_locales); ?> </a></td>
                           
                            <td class="mdl-data-table__cell--non-numeric mdl-layout--large-screen-only"><a href="<?php echo e(URL::to('locales/' . $local->id)); ?>"><?php echo e($local->descripcion_locales); ?> </a></td>
                            
                            <td class="mdl-data-table__cell--non-numeric">

                                
                                <a href="<?php echo e(URL::to('local/' . $local->id)); ?>" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" title="View User Account">
                                    <i class="material-icons mdl-color-text--blue">account_circle</i>
                                </a>

                                
                                <a href="<?php echo e(URL::to('local/' . $local->id . '/edit')); ?>" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="material-icons mdl-color-text--orange">edit</i>
                                </a>

                                
                                
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
        </div>
    </div>
    <div class="mdl-card__menu" style="top: -4px;">


    </div>
</div>

<?php echo $__env->make('dialogs.dialog-delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <?php echo $__env->make('scripts.highlighter-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('scripts.mdl-datatables', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>