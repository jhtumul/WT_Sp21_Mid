<?php include 'admin_header.php';
require_once "CONTROLLER/category_controller.php";?>
<!--edit category starts -->
<div class="center">
	<form method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="text" name="category_name" class="form-control">
			<?php echo $err_category; ?>
		</div>
		
		<div class="form-group text-center">
			
			<input type="submit" name="edit_category" class="btn btn-success" value="Edit Category" class="form-control">
		</div>
	</form>
</div>

<!--edit category ends -->
<?php include 'admin_footer.php';?>