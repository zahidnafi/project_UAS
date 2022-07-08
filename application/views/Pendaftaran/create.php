<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Pendafaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('index.php');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('index.php/Pendaftaran');?>">Data Pendaftaran</a></li>
              <li class="breadcrumb-item active">Tambah Pendafaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-body">
          <?php echo form_open('pendaftaran/save', ['action' => 'post']); ?>
          <input type="hidden" name="id" id="id" value="default">
          <div class="form-group row">
            <label for="tanggal" class="col-4 col-form-label">Tanggal Daftar</label>
            <div class="col-8">
              <div class="input-group">
                <input id="tanggal" name="tanggal_daftar" type="date" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="alasan" class="col-4 col-form-label">Alasan</label>
            <div class="col-8">
              <div class="input-group">
                <textarea id="alasan" name="alasan" type="text" class="form-control" cols="30" rows="5" style="resize: none;"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group row">
              <label for="user" class="col-4 col-form-label">User</label>
              <div class="col-8">
                <select id="user" name="users_id" class="custom-select" required="required">
                  <option value="1">admin</option>
                  <option value="2">aminah</option>
                  <option value="8">Tejo</option>
                </select>
              </div>
          </div>
          <div class="form-group row">
            <label for="kegiatan" class="col-4 col-form-label">Kegiatan</label>
            <div class="col-8">
              <select id="kegiatan" name="kegiatan_id" class="custom-select" required="required">
                <option value="1">Seminar Sukses Kuliah di Luar Negeri</option>
                <option value="9">Seminar Event</option>
                <option value="10">Soccer tournament</option>
                <option value="11">Bazaar</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="kategori_peserta" class="col-4 col-form-label">Kategori Peserta</label>
            <div class="col-8">
              <select id="kategori_peserta" name="kategori_peserta_id" class="custom-select" required="required">
                <option value="1">Pelajar</option>
                <option value="2">Mahasiswa</option>
                <option value="3">Karyawan Swasta</option>
                <option value="4">Guru/Dosen</option>
                <option value="5">Umur</option>
                <option value="6">ASN</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="nosertifikat" class="col-4 col-form-label">No. Sertifikat</label>
            <div class="col-8">
              <div class="input-group">
                <input id="nosertifikat" name="nosertifikat" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>