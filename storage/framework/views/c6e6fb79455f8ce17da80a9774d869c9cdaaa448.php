<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                       CPP


                    </div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                    <?php endif; ?>

                            <form action="<?php echo e(route('cc')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                            <div id="bio">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" rows="3" >
                                    <span id = "nm"style="display: none;color:red;">Required</span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"  >
                                    <span id = "em" style="display: none;color:red;">Required</span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company Name</label>
                                    <input type="text" name="cname" class="form-control" id="cname" aria-describedby="emailHelp" >
                                    <span id = "cm"style="display: none;color:red;">Required</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Position</label>
                                    <input type="text" name="positions" class="form-control" id="position" aria-describedby="emailHelp" >
                                    <span id = "pm"style="display: none;color:red;">Required</span>
                                </div>
                                <a  class="btn btn-info" style="color: white;float: right" onclick="myFunction()">Processed</a>
                            </div>

                           <div id="intro" style="display: none;">
                               <h2>Introduction</h2><br>
                               <p>Take your to reflect on each and select the score that best applies to the real you.The
                               rating scale ranges from 1 to 6, with 6 very like me and 1 not like me. Please choose accordingly</p>
                               <br><br>
                               <a  class="btn btn-info" style="color: white;float: right" onclick="myFunction2()">Processed</a>

                           </div>

                        <table class="table" id="myDIV" style="display: none;margin-left: 0px">
                            <tbody>
                            <?php $i=1;?>
                            <?php $__currentLoopData = $shares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $share): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($i); ?></td>
                                    <td><?php echo e($share->question_name); ?></td>

                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"  name="optradio[<?php echo $share->id; ?>]"  id="inlineRadio1" value="1" >
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="optradio[<?php echo $share->id; ?>]" id="inlineRadio2" value="2">
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"name="optradio[<?php echo $share->id; ?>]"  id="inlineRadio2" value="3">
                                            <label class="form-check-label" for="inlineRadio2">3</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="optradio[<?php echo $share->id; ?>]"  id="inlineRadio2" value="4">
                                            <label class="form-check-label" for="inlineRadio2">4</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"name="optradio[<?php echo $share->id; ?>]"  id="inlineRadio2" value="5">
                                            <label class="form-check-label" for="inlineRadio2">5</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="optradio[<?php echo $share->id; ?>]"  id="inlineRadio2" value="6">
                                            <label class="form-check-label" for="inlineRadio2">6</label>
                                        </div>

                                    </td>
                                </tr>
                                <?php $i++;?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                        </table>

                            <button type="submit" style="display: none;" id="btnsubmit" class="btn btn-success" name="submit">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<script>

    function myFunction() {

        //check text box is empty or not
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var cname = document.getElementById("cname").value;
        var position = document.getElementById("position").value;

        var nm = document.getElementById("nm");
        var em = document.getElementById("em");
        var cm = document.getElementById("cm");
        var pm = document.getElementById("pm");

        if(name == ''){
            nm.style.display = "block";
            return false;
        }
        if(email == ''){
            em.style.display = "block";
            return false;
        }if(cname == ''){
            cm.style.display = "block";
            return false;
        }if(position == ''){
            pm.style.display = "block";
            return false;
        }


        var bio = document.getElementById("bio");
        var intro = document.getElementById("intro");


        if (intro.style.display === "none") {
            intro.style.display = "block";
            bio.style.display = "none";

        } else {
            intro.style.display = "none";
        }

    }

    function myFunction2() {
        var x = document.getElementById("myDIV");
        var intro = document.getElementById("intro");
        var y = document.getElementById("btnsubmit");

        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "block";
            intro.style.display = "none";

        } else {
            x.style.display = "none";
        }

    }

</script>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Zahid\laravel-all\Traitmatrix\resources\views/respondent/cpp.blade.php ENDPATH**/ ?>