

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e($questionnaire->title); ?></div>

                <div class="card-body">
                    <a class="btn btn-dark" href="/questionnaires/<?php echo e($questionnaire->id); ?>/questions/create" >Add Question</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\questionnaire\resources\views/questionnaire/show.blade.php ENDPATH**/ ?>