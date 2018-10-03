<section class="main-content">
	<div class="row">
		<div class="span8">
			<h4>Your Personal Details</h4>
			<form action="#" method="post">
				<div class="control-group">
					<label class="control-label">Title</label>
					<div class="controls">
						<input type="text" placeholder="" name="title" class="input-xlarge">
					</div>
				</div>
				<div class="control-group">
					<label for="textarea" class="control-label">Discription</label>
					<div class="controls">
						<textarea rows="3" id="textarea" class="span6" name="discription"></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Price</label>
					<div class="controls">
						<input type="text" placeholder="" name="price" class="input-xlarge">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Vat</label>
					<div class="controls">
						<input type="text" placeholder="" name="vat" class="input-xlarge">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Sub Category</label>
					<div class="controls">
						<input type="text" placeholder="" name="subcategoryid" class="input-xlarge">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Unit</label>
					<div class="controls">						
						<select class="input-xlarge" name="unitid">
							<?php foreach ($allunit as $unit_value) {?>						
							<option value="<?php echo $unit_value->id ?>"><?php echo $unit_value->name ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Category</label>
					<div class="controls">						
						<select class="input-xlarge" name="catid" id="catid">
							<option value="0">Select Category</option>
							<?php foreach ($allcat as $cat_value) {?>						
							<option value="<?php echo $cat_value->id ?>"><?php echo $cat_value->name ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Sub Category</label>
					<div class="controls">						
						<select class="input-xlarge" name="scatid" id="scatid">
							<option value="0">Select Category First</option>
							<?php foreach ($sallcat as $scat_value) {?>						
							<option value="<?php echo $scat_value->id ?>"><?php echo $scat_value->name ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Stock</label>
					<div class="controls">
						<input type="text" placeholder="" name="stock" class="input-xlarge">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Picture</label>
					<div class="controls">
						<input type="file" placeholder="" name="picture" class="input-xlarge">
					</div>
				</div>
				<br>
				<button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">Submit</button>
			</form>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$("#catid").change(function() {
			var catid = $(this).val();
			$("#scatid").html("");
			if (catid == 0){
				$("#scatid") .html('<option value="0">Select Category First</option>');
			}			
			<?php 
				foreach ($allcat as $cat_value) {
					echo "else if (catid == {$cat_value->id}){";
				foreach ($sallcat as $scat_value) {
					if($scat_value->categoryid == $cat_value->id){
						echo "$(#scatid).append('<option value=\"{$scat_value->id}\">{$scat_value->name }</option>');";
					}}
				echo "}";}
			}
			
				

				
			?>
			
			
		});
	});
</script>