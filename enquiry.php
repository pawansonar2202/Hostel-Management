<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>List of Enquiry</b>
					<span class="float:right"><a class="btn btn-primary btn-block btn-sm col-sm-2 float-right" href="delete.php" style="background-color:black;border-color:black">
					 Delete all
				</a></span
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">Date</th>
									<th class="">Name</th>
									<th class="">Contact</th>
									<th class="">Email</th>
									<th class="">Message</th>
                                </tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;

								$sql = "SELECT name,email,contact,message,date FROM enquiry";
								$result = $conn->query($sql);
				//				$invoices = $conn->query("SELECT p.*,concat(t.lastname,', ',t.firstname,' ',t.middlename) as name FROM payments p inner join tenants t on t.id = p.tenant_id where t.status = 1 order by date(p.date_created) desc ");
								while($row = $result->fetch_assoc()):
									
								?>
								<tr>
									<td class="text-center"><?php $i++;  echo date('d / m / Y',strtotime($row['date'])) ?></td>
									<td>
										<p> <b><?php echo ucwords($row['name']) ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo ucwords($row['contact']) ?></b></p>
									</td>
									<td class="">
										<p> <b><?php echo ucwords($row['email']) ?></b></p>
									</td>
									<td class="text-left">
										 <p> <b><?php echo ucwords($row['message'],0) ?></b></p>
									</td>
									
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
