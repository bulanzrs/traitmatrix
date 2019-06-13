<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="/create_question"><i class="fas fa-arrow-left" style="margin-right: 10px"></i></a>Show Question


                    </div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                    <?php endif; ?>

                       <div class="form-group">
                         <div class="form-group">
                             <strong>Question:</strong>
                             <?php echo e($question->question_name); ?>

                         </div>
                       </div>

                       <div class="form-group">
                         <div class="form-group">
                             <strong>Cluster:</strong>
                             <?php echo e($question->cluster); ?>

                         </div>
                       </div>

                        <div class="form-group">
                            <div class="form-group">
                                <strong>ADT:</strong>
                                <?php echo e($question->adt); ?>

                               </div>
                         </div>

                          <div class="form-group">
                            <div class="form-group">
                                <strong>Trait Type:</strong>
                                <?php echo e($question->trait_type); ?>

                               </div>
                         </div>


                            <div class="form-group">
                                <div class="form-group">
                                    <strong>Reverse Question:</strong>
                                    <?php if($question->reverse==0): ?>
                                        <p>No</p>
                                    <?php else: ?>
                                        <span>Yes</span>
                                    <?php endif; ?>

                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Zahid\laravel-all\Traitmatrix\resources\views/admin/show_question.blade.php ENDPATH**/ ?>