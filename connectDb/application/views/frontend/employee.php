<div class="container">
	<div class="row">
		<div class="col-md-12 mt-4">
			<div class="card">
				<div class="card_header">
					<?php if($this->session->flashdata('status')): ?>
						<div class="alert alert-success"><?= $this->session->flashdata('status'); ?></div>
					<?php endif; ?>
					<h2>
					Employee Data
					<a href="<?php echo base_url('employee/add')?>" class="btn btn-primary float-right">Add Employee</a>
					</h2>
				</div>
				<div class="card_body">
					<form action="<?php echo base_url('employee/deleteAll') ?>" method="post">
					<table id="datatable1" class="table table-bordered">
						<thead>
							<tr>
								<th>
									<button type="submit" name="deleteEmpBtn" class="btn btn-danger btn-sm">Delete all</button>
								</th>
								<th>ID</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Phone Number</th>
								<th>Email</th>
								<th>Edit</th>
								<th>Delete</th>
								<th>Confirm Deletion</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($employees as $row) : ?>
							<tr>
								<td class="text-center"><input type="checkbox" name="checkbox_value[]" value="<?= $row->id; ?>"></td>
								<td><?php echo $row->id; ?></td>
								<td><?php echo $row->first_name; ?></td>
								<td><?php echo $row->last_name; ?></td>
								<td><?php echo $row->phone; ?></td>
								<td><?php echo $row->email; ?></td>
								<td><a href="<?php echo base_url('employee/edit/'.$row->id) ?>" class="btn btn-primary">Edit</a></td>
								<td><a href="<?php echo base_url('employee/delete/'.$row->id) ?>" class="btn btn-danger">Delete</a></td>
								<td><button type = "button" class="btn btn-danger confirm-delete" value="<?= $row->id; ?>">Confirm Delete</button></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
