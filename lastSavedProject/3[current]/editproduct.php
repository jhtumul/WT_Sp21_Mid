<?php include 'admin_header.php';
require_once "CONTROLLER/add_product_controller.php";?>
<!--editproduct starts -->
<div class="center">
<table>
	<td>
		<img class="item-image" src="https://m.media-amazon.com/images/I/41n0GIKkW8L._AC_SR160,160_.jpg"></img>
	</td>
	<td>
		<form method="post" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" name="pname" class="form-control">
				<?php echo $err_pname;?>
			</div>
			<div class="form-group">
				<h4 class="text">Category:</h4> 
				<select name="pcategory" class="form-control">
					<option>Choose</option>
					<option>2nd</option>
				</select>
				<?php echo $err_pcategory;?>
			</div>
			<div class="form-group">
				<h4 class="text">Price:</h4> 
				<input type="text" name="pprice" class="form-control">
				<?php echo $err_pprice;?>
			</div>
			<div class="form-group">
				<h4 class="text">Quantity:</h4> 
				<input type="text" name="pquantity" class="form-control">
				<?php echo $err_pquantity;?>
			</div>
			<div class="form-group">
				<h4 class="text">Description:</h4> 
				<textarea type="text" name="pdescription" class="form-control"></textarea>
				<?php echo $err_pdescription;?>
			</div>
			<div class="form-group">
				<h4 class="text">Image</h4> 
				<input type="file" name="pimage" class="form-control">
				<?php echo $err_pimage;?>
			</div>
			<div class="form-group text-center">
				
				<input type="submit" name="edit_product" class="btn btn-success" value="Edit Product" class="form-control">
			</div>
		</form>
	</td>
</table>				
</div>

<!--editproduct ends -->
<?php include 'admin_footer.php';?>