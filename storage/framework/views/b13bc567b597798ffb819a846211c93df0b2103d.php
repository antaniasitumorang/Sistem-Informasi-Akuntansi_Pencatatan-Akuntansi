<form class="mt-4 mb-3 d-md-none" action="<?php echo e(URL::current()); ?>" method="GET">
    <div class="input-group input-group-rounded input-group-merge">
        <input type="search" name="cari" class="form-control form-control-rounded form-control-prepended" placeholder="cari" aria-label="cari" value="<?php echo e(request('cari')); ?>">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <span class="fa fa-search"></span>
            </div>
        </div>
    </div>
</form>
<?php /**PATH C:\Antania\akuntansi\akuntansi\resources\views/layouts/navbars/form-search-mobile.blade.php ENDPATH**/ ?>