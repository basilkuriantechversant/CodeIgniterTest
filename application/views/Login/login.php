
		<div class="col-sm-12">
			<!-- <div class="col-sm-4"></div>
			<div class="col-sm-4"> -->
				<div class="container" style="text-align: center; width : 25vw">
					<div><h1>Login</h1></div>
					<form method="post" action="<?=site_url('login')?>">
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
							<h3><a href="<?=site_url('registerView')?>">Register Here</a></h3>
						</div>
					</form>
				</div>
			<!-- </div>
			<div class="col-sm-4"></div> -->
		</div>

	</body>
</html>
