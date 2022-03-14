		<?php
			if($sessionId != NULL){
		?>	

			<div class="container">
				
				<div class="col-sm-12"> 
					<div class="col-sm-4"></div>
					<div class="col-sm-4" style="text-align: center; width : 25vw"><h1>Admin Homepage</h1></div>
					<div class="col-sm-4"></div>
				</div>

				<div class="col-sm-12">&nbsp;</div>

				<div class="col-sm-12"> 
					<div class="col-sm-9"></div>
					<div class="col-sm-3">
						<a href="<?=site_url('createView')?>"><button class="btn btn-primary">Create Product</button></a>
						<a href="<?=site_url('logout')?>"><button class="btn btn-primary">Logout</button></a>
					</div>
				</div>

				<div class="col-sm-12">&nbsp;</div>

				<div class="col-sm-12"> 
					<table class="table">
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						<?php
							foreach($productDetails as $products){
						?>
						
						<tr>
							<td><?=$products->title?></td>
							<td><?=$products->description?></td>
							<td>
								<form method="get" action="<?=site_url('edit')?>">
									<input type="hidden" name="pid" value="<?=$products->id?>">
									<input type="submit" value="Edit" class="form-control">
								</form>
							</td>
							<td>
								<form method="get" action="<?=site_url('delete')?>">
									<input type="hidden" name="pid" value="<?=$products->id?>">
									<input type="submit" value="Delete" class="form-control" width="10v">
								</form>
							</td>
						</tr>

						<?php
							}
						?>
					</table>
				</div>
			</div>		
		<?php
			}
		?>
