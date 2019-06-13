<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard <span style="float: right"><a href="/create-assesment">Add new Assesment</a></span>
                </div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                       <center> <h3>Create Questions</h3>  </center>
                        <br>
                        <div class="row">
                            <div class="col">
                                <a href="/create_question" style="text-decoration: none">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                        <div class="card-body">
                                            <center>
                                                <h2 class="card-title">C.P.P</h2>
                                            </center>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                                
                                
                                    
                                        
                                            
                                        
                                    
                                
                                
                            
                        

                        

                            

                                

                                    
                                        
                                            
                                        

                                    
                                

                            
                            
                                

                                    
                                        
                                            
                                        
                                    
                                
                            
                        

                        

                            

                                

                                    
                                        
                                            
                                        

                                    
                                

                            
                            
                                

                                    
                                        
                                            
                                        
                                    
                                
                            
                        


                </div>
            </div>
        </div>
    </div>

        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <center> <h3>Respondent Marks</h3>  </center>
                    <br>
                    <div class="row">
                        <div class="col">
                            <a href="/adt_all" style="text-decoration: none">
                                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">

                                    <div class="card-body">
                                        <center>
                                            <h2 class="card-title">C.P.P ADT Mark</h2>
                                        </center>

                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col">
                            <a href="/cpp_all" style="text-decoration: none">
                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">

                                    <div class="card-body">
                                        <center>
                                            <h2 class="card-title">C.P.P Mark </h2>
                                        </center>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Zahid\laravel-all\Traitmatrix\resources\views/home.blade.php ENDPATH**/ ?>