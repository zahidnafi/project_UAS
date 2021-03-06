	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Data Jenis Kegiatan</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="<?= base_url('index.php');?>">Home</a></li>
							<li class="breadcrumb-item active">Data Jenis Kegiatan</li>
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
						<h3 class="card-title">Kelola Data Jenis Kegiatan</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<a href="<?php echo base_url('JenisKegiatan/create') ?>" data-toggle="modal" data-target="#form-jenis-kegiatan" class="btn btn-primary mb-3">Tambah Data</a>
							<thead>
								<tr>
									<th>No</th>
									<th>Jenis Kegiatan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($list_jnskgt as $jnskgt) : ?>
									<tr>
										<td> <?= $no++; ?> </td>
										<td> <?= $jnskgt->nama ?> </td>
										<td width="200px">
										<a class="btn btn-info btn-sm" href="edit?id=<?= $jnskgt->id ?>">
											<i class="fas fa-pencil-alt"></i>
											Edit
										</a>
										<a class="btn btn-danger btn-sm" href="delete?id=<?= $jnskgt->id ?>" onclick="return confirm('Apakah Anda Yakin');">
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
	<div class="modal fade" id="form-jenis-kegiatan">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Jenis Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open('JenisKegiatan/save', ['action' => 'post']); ?>
					<div class="form-group row">
						<label for="text" class="col-4 col-form-label">Jenis Kegiatan</label>
						<div class="col-8">
							<input name="nama" type="text" id="nama" class="form-control">
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
					<button type="submit" name="submit" class="btn btn-primary">Tambah</button>
				</div>
				<?php echo form_close(); ?>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- /.content-wrapper -->

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>