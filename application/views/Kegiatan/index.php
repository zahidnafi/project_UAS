	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Data Kegiatan</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="<?= base_url('index.php');?>">Home</a></li>
							<li class="breadcrumb-item active">Data Kegiatan</li>
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
						<h3 class="card-title">Kelola Data Kegiatan</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<a href="<?php echo base_url('Kegiatan/create') ?>" class="btn btn-primary mb-3">Tambah Data</a>
							<thead class="text-center">
								<tr>
									<th>No</th>
									<th>Judul</th>
									<th>kapasistas</th>
									<th>Harga Tiket</th>
									<th>Tanggal</th>
									<th>Narasumber</th>
									<th>Tempat</th>
									<th>Pic</th>
									<th>Foto flyer</th>
									<th>Jenis Kegiatan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($list_kgt as $kgt) : ?>
									<tr class="text-center">
										<td> <?= $no++; ?> </td>
										<td> <?= $kgt->judul ?> </td>
										<td> <?= $kgt->kapasitas; ?> </td>
										<td>Rp. <?= $kgt->harga_tiket; ?> </td>
										<td width="100px"> <?= $kgt->tanggal; ?> </td>
										<td width="310px"> <?= $kgt->narasumber; ?> </td>
										<td> <?= $kgt->tempat; ?> </td>
										<td width="120px"> <?= $kgt->pic; ?> </td>
										<td>
											<img src="<?php echo base_url(); ?>assets/foto/<?php echo $kgt->foto_flyer ?>" width="100">
										</td>
										<td> <?= $kgt->nama; ?> </td>
										<td width="240px">
										<a class="btn btn-primary btn-sm" href="view?id=<?= $kgt->id ?>">
											<i class="fa-solid fa-circle-info"></i>
											Detail
										</a>
										<a class="btn btn-info btn-sm" href="edit?id=<?= $kgt->id ?>">
											<i class="fas fa-pencil-alt"></i>
											Edit
										</a>
										<a class="btn btn-danger btn-sm" href="delete?id=<?= $kgt->id ?>" onclick="return confirm('Apakah Anda Yakin');">
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


	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>