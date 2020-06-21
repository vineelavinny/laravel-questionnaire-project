

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e($questionnaire->title); ?></div>

                <div class="card-body">
                    <a class="btn btn-dark" href="/questionnaires/<?php echo e($questionnaire->id); ?>/questions/create" >Add Question</a>
                    <a class="btn btn-dark" href="/survey/<?php echo e($questionnaire->id); ?>-<?php echo e(Str::slug($questionnaire->title)); ?>" >Take Survey</a>
                </div>
            </div>
            <?php $__currentLoopData = $questionnaire->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-4">
                <div class="card-header"><?php echo e($question->question); ?></div>

                <div class="card-body">
                    <ul class="list-group">
                        <?php $__currentLoopData = $question->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item"><?php echo e($answer->answer); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\questionnaire\resources\views/questionnaire/show.blade.php ENDPATH**/ ?>