<!-- grow -->
<div class="grow">
	<div class="container">
		<h2>Login</h2>
	</div>
</div>
<!-- grow -->
<!--content-->
<div class="container">
	<div class="account">
		<div class="account-pass">
			<div class="col-md-12 account-top">
				<form action="<?php echo $this->config->base_url(); ?>login/action" method="post">
				<span style='color:red;'><?php echo validation_errors(); ?></span>
					<div>
						<span>Username</span>
						<input name="uname" type="text">
					</div>
					<div>
						<span>Password</span>
						<input name="pwd" type="password">
					</div>
					<button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
					<a href="<?php echo $this->config->base_url(); ?>/signup"><button type="button" class="btn btn-primary btn-lg btn-block">Sign Up</button></a>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

</div>

<!--//content-->
