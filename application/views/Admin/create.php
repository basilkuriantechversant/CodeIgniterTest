<?php
			if($sessionId != NULL){
		?>	

			<div class="container">
				
				<div class="col-sm-12"> 
					<div class="col-sm-4"></div>
					<div class="col-sm-4" style="text-align: center; width : 25vw"><h1>Create Product</h1></div>
					<div class="col-sm-4"></div>
				</div>

				<div class="col-sm-12">&nbsp;</div>

				<div class="col-sm-12"> 
					<div class="col-sm-11"></div>
					<div class="col-sm-1">
						<a href="<?=site_url('logout')?>"><button class="btn btn-primary">Logout</button></a>
					</div>
				</div>

				<div class="col-sm-12">&nbsp;</div>

				<form method="post" action="<?=site_url('create')?>">

					<div class="col-sm-12"> 
						<div class="col-sm-4">Title</div>
						<div class="col-sm-8">
							<input type="text" name="title" id="title" placeholder="Product Title" class="form-control">
						</div>
					</div>

					<div class="col-sm-12">&nbsp;</div>

					<div class="col-sm-12"> 
						<div class="col-sm-4">Description</div>
						<div class="col-sm-8">
							<textarea name="description" id="description" class="form-control" placeholder="Product Description"></textarea>
						</div>
					</div>

					<div class="col-sm-12">&nbsp;</div>

					<div class="col-sm-12"> 
						<div class="col-sm-4">Image</div>
						<div class="col-sm-8">
							<input type="File" name="file" id="file" class="form-control">
						</div>
					</div>

					<div class="col-sm-12">&nbsp;</div>

					<div class="col-sm-12"> 
						<div class="col-sm-4"></div>
						<div class="col-sm-4">
							<input type="submit" name="submit" id="submit" class="btn btn-success">
						</div>
						<div class="col-sm-4">
							<a href="<?=site_url('productsView')?>"><input type="cancel" value="Cancel" class="btn btn-danger"></a>
						</div>
					</div>

				</form>
				
			</div>
		
		<?php
			}
		?>
