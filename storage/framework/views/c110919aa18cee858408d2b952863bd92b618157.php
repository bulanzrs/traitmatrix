<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/home"><i class="fas fa-arrow-left" style="margin-right: 10px"></i></a>Back


                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Respondent ID</th>
                                <th scope="col">Cluster 1</th>
                                <th scope="col">Cluster 2</th>
                                <th scope="col">Cluster 3</th>
                                <th scope="col">Cluster 4</th>
                                <th scope="col">Cluster 5</th>
                                <th scope="col">Cluster 6</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $cpp_all = DB::table('cpp_mark_overall')->get();

                            ?>
                            <?php $__currentLoopData = $cpp_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $share): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($share->respondent_id); ?></td>
                                    <td><?php echo e($share->score_cluster1); ?></td>
                                    <td><?php echo e($share->score_cluster2); ?></td>
                                    <td><?php echo e($share->score_cluster3); ?></td>
                                    <td><?php echo e($share->score_cluster4); ?></td>
                                    <td><?php echo e($share->score_cluster5); ?></td>
                                    <td><?php echo e($share->score_cluster6); ?></td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Zahid\laravel-all\Traitmatrix\resources\views/admin/cpp_overall.blade.php ENDPATH**/ ?>