<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Create User</h1></div>

                <div class="panel-body">
					<form action="<?php echo e(route('create-user')); ?>" method="POST" id="submit">
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
						<div class="form-group">
							<label>Email</label>
							<div class="input-group input-group--inline">
								<div class="input-group-addon">
									<i class="material-icons">account_circle</i>
								</div>
								<input type="text" class="form-control email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>				
							</div>
						</div>
						<div class="form-group hidden">
							<div class="d-flex">
							   <label>Password</label>
							</div>
							<div class="input-group input-group--inline <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
							   <div class="input-group-addon">
								  <i class="material-icons">lock_outline</i>
							   </div>
							   <input type="password" class="form-control password" name="password" value="Jthm123." required autofocus>				
							</div>
						</div>						
                        <div class="form-group hidden">
							<label>Confirm Password</label>
							<div class="input-group input-group--inline">
								<div class="input-group-addon">
									<i class="material-icons">lock_outline</i>
								</div>
								<input type="password" class="form-control password_confirmation" name="password_confirmation" value="Jthm123." required autofocus>				
							</div>						
                        </div>	
						<div class="form-group">
							<div class="d-flex">
							   <label>User Role</label>
							</div>
							<div class="input-group input-group--inline <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
							   <div class="input-group-addon">
								  <i class="material-icons">lock_outline</i>
							   </div>
							   <select class="form-control role" name="role" required autofocus>
									<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
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