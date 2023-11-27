<form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" action="<?php echo e(URL::current()); ?>" method="GET">
    <div class="form-group mb-0">
        <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control" placeholder="Cari ...." type="search" name="cari" value="<?php echo e(request('cari')); ?>">
        </div>
    </div>
</form>
<?php /**PATH C:\Antania\akuntansi\akuntansi\resources\views/layouts/navbars/form-search.blade.php ENDPATH**/ ?>