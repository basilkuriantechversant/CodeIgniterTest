
		<div class="col-sm-12">
			<div class="container" style="text-align: center; width : 25vw">
				<div><h1>Register</h1></div>
				<form method="post" action="<?=site_url('register')?>">
					<div class="form-group">
						<input type="name" name="name" id="name" placeholder="Enter Name" class="form-control">
					</div>
					<div class="form-group">
						<input type="email" name="email" id="email" placeholder="Enter Email" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="password" id="password" placeholder="Enter Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" id="submit" class="btn btn-success">
					</div>
					<div class="form-group">
						<h5>OR</h5>
					</div>
					<div class="form-group">
						<h3><a href="<?=site_url('')?>">Login Here</a></h3>
					</div>
				</form>
			</div>
		</div>
