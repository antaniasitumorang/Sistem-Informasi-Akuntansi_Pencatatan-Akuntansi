<div class="row fixed-top m-3" style="z-index: 99999999999999999">
    <div class="col-lg-6"></div>
    <div class="col-lg-6">
        <div class="notifikasi"></div>
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="fas fa-check-circle"></i> <strong>Berhasil</strong></span>
                <span class="alert-text">
                    <?php echo e(session('success')); ?>

                </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="fas fa-times-circle"></i> <strong>Gagal</strong></span>
                <span class="alert-text">
                    <?php echo e(session('error')); ?>

                </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(session('api_error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="fas fa-times-circle"></i> <strong>Gagal</strong></span>
                <span class="alert-text">
                    <?php echo session('api_error'); ?>

                </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <span class="alert-icon"><i class="fas fa-times-circle"></i> <strong>Gagal</strong></span>
                <span class="alert-text">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Antania\akuntansi\akuntansi\resources\views/layouts/headers/alert.blade.php ENDPATH**/ ?>