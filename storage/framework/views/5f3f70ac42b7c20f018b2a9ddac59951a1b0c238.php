<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
	<strong>Perhatian</strong>
	<br />
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php endif; ?>

<h1> Silahkan Login</h1>
<form action="<?php echo e(url('t_login')); ?>" method="POST">
	<?php echo csrf_field(); ?>
	
	username: <input type="text" name="username" /></br>
	password: <input type="password" name="password" /><br/>
	
	<input type="submit" value="Login" />
</form>