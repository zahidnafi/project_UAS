	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Data User</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Data User</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Kelola Data User</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<a href="<?php echo base_url('Kegiatan/create') ?>" class="btn btn-primary mb-3">Tambah Data</a>
							<thead>
								<tr>
									<th>No</th>
									<th>Username</th>
									<th>Email</th>
									<th>Tanggal Buat</th>
									<th>Terakhir Login</th>
									<th>Status</th>
									<th>Role</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($list_user as $user) : ?>
									<tr>
										<td> <?= $no++; ?> </td>
										<td> <?= $user->username ?> </td>
										<td> <?= $user->email; ?> </td>
										<td> <?= $user->created_at ?> </td>
										<td> <?= $user->last_login; ?> </td>
										<td> <?= $user->status; ?> </td>
										<td> <?= $user->role; ?> </td>
										<td width="280px">
										<a class="btn btn-primary btn-sm" href="view?id=<?= $user->id ?>">
											<i class="fa-solid fa-circle-info"></i>
											Detail
										</a>
										<a class="btn btn-info btn-sm" href="edit?id=<?= $user->id ?>">
											<i class="fas fa-pencil-alt"></i>
											Edit
										</a>
										<a class="btn btn-danger btn-sm" href="delete?id=<?= $user->id ?>" onclick="return confirm('Apakah Anda Yakin');">
											<i class="fas fa-trash"></i>
											Delete
										</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<div class="row">
				</div>
				<!-- /.row (main row) -->
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>