<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="/home"><i class="fas fa-arrow-left" style="margin-right: 10px"></i></a>Create Assesment</div>

                    <div class="card-body">

                        <form method="POST" action="<?php echo e(route('assesment')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="C.P.P" required>
                            </div>
                            <button type="submit" class="btn btn-success">ADD </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Zahid\laravel-all\Traitmatrix\resources\views/admin/create_assesment.blade.php ENDPATH**/ ?>