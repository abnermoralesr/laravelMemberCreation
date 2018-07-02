<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Create Role</h1></div>

                <div class="panel-body">
					<form action="<?php echo e(route('create-role')); ?>" method="POST" id="submit">
						<?php echo e(csrf_field()); ?>

						<?php if($errors->has('email')): ?>
						<div class="alert alert-danger">
							<?php echo e($errors->first('email')); ?>

						</div>
						<?php endif; ?>
						<?php if($errors->has('password')): ?>
							<div class="alert alert-danger">
								<?php echo e($errors->first('password')); ?>

							</div>
						<?php endif; ?>		
						<div id="ajaxErrors">
							
						</div>
						<div class="form-group">
							<label>Name</label>
							<div class="input-group input-group--inline">
								<div class="input-group-addon">
									<i class="material-icons">account_circle</i>
								</div>
								<input type="text" class="form-control name" name="name" value="<?php echo e(old('name')); ?>" required autofocus>				
							</div>
						</div>						
						<div class="text-center">
							<input type="submit" class="btn btn-primary" value="Create">
						</div>
					</form>				
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>