<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('index.php');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('index.php/kegiatan');?>">Kegiatan</a></li>
              <li class="breadcrumb-item active">Detail Kegiatan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Kegiatan</h3>
        </div>
        <div class="card-body">

          <div class="row mb-2">
            <div class="col-sm-8">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>judul</td>
                    <td><?= $view_kgt->judul ?></td>
                  </tr>
                  <tr>
                    <td>Kapasitas</td>
                    <td><?= $view_kgt->kapasitas ?></td>
                  </tr>
                  <tr>
                    <td>Harga Tiket</td>
                    <td><?= $view_kgt->harga_tiket ?></td>
                  </tr>
                  <tr>
                    <td>Tanggal</td>
                    <td><?= $view_kgt->tanggal ?></td>
                  </tr>
                  <tr>
                    <td>Narasumber</td>
                    <td><?= $view_kgt->narasumber ?></td>
                  </tr>
                  <tr>
                    <td>Tempat</td>
                    <td><?= $view_kgt->tempat ?></td>
                  </tr>
                  <tr>
                    <td>Pic</td>
                    <td><?= $view_kgt->pic ?></td>
                  </tr>
                  <tr>
                    <td>Jenis Kegiatan</td>
                    <td><?= $view_kgt->nama; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-sm-4">
              <img src="<?php echo base_url(); ?>assets/foto/<?php echo $view_kgt->foto_flyer ?>" width="320" height="250">

            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>