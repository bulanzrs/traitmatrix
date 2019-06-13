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

                            <form method="POST" action="<?php echo e(route('questions.update',$question->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Question</label>
                                    <textarea class="form-control" name="question_name" id="exampleFormControlTextarea1" rows="3" required><?php echo e($question->question_name); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Cluster</label>
                                    <select class="form-control" name="cluster" required id="exampleFormControlSelect1">
                                        <option  selected><?php echo e($question->cluster); ?></option>
                                        <option>cluster1</option>
                                        <option>cluster2</option>
                                        <option>cluster3</option>
                                        <option>cluster4</option>
                                        <option>cluster5</option>
                                        <option>cluster6</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">ADT</label>
                                    <select class="form-control" name="adt" required id="exampleFormControlSelect1">
                                        <option  selected><?php echo e($question->adt); ?></option>
                                        <option>cluster1_a</option>
                                        <option>cluster1_d</option>
                                        <option>cluster1_t</option>

                                        <option>cluster2_a</option>
                                        <option>cluster2_d</option>
                                        <option>cluster2_t</option>

                                        <option>cluster3_a</option>
                                        <option>cluster3_d</option>
                                        <option>cluster3_t</option>

                                        <option>cluster4_a</option>
                                        <option>cluster4_d</option>
                                        <option>cluster4_t</option>

                                        <option>cluster5_a</option>
                                        <option>cluster5_d</option>
                                        <option>cluster5_t</option>

                                        <option>cluster6_a</option>
                                        <option>cluster6_d</option>
                                        <option>cluster6_t</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Trait</label>
                                    <input type="text" name="trait_type" value="<?php echo e($question->trait_type); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stable/Balanced" required>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Zahid\laravel-all\Traitmatrix\resources\views/admin/edit_question.blade.php ENDPATH**/ ?>