	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Data Pendaftaran</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="<?= base_url('index.php');?>">Home</a></li>
							<li class="breadcrumb-item active">Data Pendaftaran</li>
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
						<h3 class="card-title">Kelola Data Pendaftaran</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<a href="<?php echo base_url('Pendaftaran/create') ?>" class="btn btn-primary mb-3">Tambah Data</a>
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal Daftar</th>
									<th>Alasan</th>
									<th>Nama User</th>
									<th>Kegiatan</th>
									<th>Kategori Peserta</th>
									<th>No Sertifikat</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($list_pdft as $pdft) : ?>
									<tr>
										<td> <?= $no++; ?> </td>
										<td> <?= $pdft->tanggal_daftar ?> </td>
										<td> <?= $pdft->alasan ?> </td>
										<td> <?= $pdft->username ?> </td>
										<td> <?= $pdft->judul ?> </td>
										<td> <?= $pdft->nama ?> </td>
										<td> <?= $pdft->nosertifikat ?> </td>
										<td width="270px" class="text-center">
										<a class="btn btn-primary btn-sm" href="view?id=<?= $pdft->id_daftar ?>">
											<i class="fa-solid fa-circle-info"></i>
											Detail
										</a>
										<a class="btn btn-info btn-sm" href="edit?id=<?= $pdft->id_daftar ?>">
											<i class="fas fa-pencil-alt"></i>
											Edit
										</a>
										<a class="btn btn-danger btn-sm" href="delete?id=<?= $pdft->id_daftar ?>" onclick="return confirm('Apakah Anda Yakin');">
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