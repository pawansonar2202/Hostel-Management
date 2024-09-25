<?php 
include 'db_connect.php'; 
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM houses where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
}
?>
<div class="container-fluid">
	<form action="update_house.php" method="post">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="row form-group">
			<div class="col-md-4">
				<label for="" class="control-label">House No.</label>
				<input type="text" class="form-control" name="house_no"  value="<?php echo isset($house_no) ? $house_no :'' ?>" required>
			</div>
            
			<div class="form-group">
								<label class="control-label">Category</label>
								<select name="category_id" id="" class="custom-select" required>
									<?php 
									$categories = $conn->query("SELECT * FROM categories order by name asc");
									if($categories->num_rows > 0):
									while($row= $categories->fetch_assoc()) :
									?>
									<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
								<?php endwhile; ?>
								<?php else: ?>
									<option selected="" value="" disabled="">Please check the category list.</option>
								<?php endif; ?>
								</select>
							</div>
			
		</div>
		<div class="form-group row">
			<div class="col-md-4">
				<label for="" class="control-label">description</label>
				<input type="text" class="form-control" name="description"  value="<?php echo isset($description) ? $description :'' ?>">
			</div>
            <div class="col-md-4">
				<label for="" class="control-label">price</label>
				<input type="double" class="form-control" name="price"  value="<?php echo isset($price) ? $price :'' ?>" required>
			</div>
			
		</div>
	</form>
</div>
