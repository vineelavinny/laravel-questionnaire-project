

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                    <form action="/questionnaires/<?php echo e($questionnaire->id); ?>/questions" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input type="text" name="question[question]" class="form-control" value="<?php echo e(old('question.question')); ?>" id="question" aria-describedby="questionHelp" placeholder="Enter question">
                            <small id="questionHelp" class="form-text text-muted">Ask simple and to-the-point questions for best results</small>
                            <?php $__errorArgs = ['question.question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small class="text-danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <fieldset>
                                <legend>Choices</legend>
                                <small id="choiceHelp" class="form-text text-muted">Give choices that give you the most insight into your question.</small>
                                <div class="form-group">
                                    <label for="choice1">Choice 1</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="<?php echo e(old('answers.0.answer')); ?>" id="choice1" aria-describedby="choiceHelp" placeholder="Enter purpose">
                                    <?php $__errorArgs = ['answers.0.answer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small class="text-danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="choice2">Choice 2</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="<?php echo e(old('answers.1.answer')); ?>" id="choice2" aria-describedby="choiceHelp" placeholder="Enter purpose">
                                    <?php $__errorArgs = ['answers.1.answer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small class="text-danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="choice3">Choice 3</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="<?php echo e(old('answers.2.answer')); ?>" id="choice3" aria-describedby="choiceHelp" placeholder="Enter purpose">
                                    <?php $__errorArgs = ['answers.2.answer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small class="text-danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="choice4">Choice 4</label>
                                    <input type="text" name="answers[][answer]" class="form-control" value="<?php echo e(old('answers.3.answer')); ?>" id="choice4" aria-describedby="choiceHelp" placeholder="Enter purpose">
                                    <?php $__errorArgs = ['answers.3.answer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><small class="text-danger"><?php echo e($message); ?></small><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Questionnaire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\questionnaire\resources\views/question/create.blade.php ENDPATH**/ ?>