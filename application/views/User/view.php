<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('index.php');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url('index.php/Users');?>">Data Users</a></li>
              <li class="breadcrumb-item active">Detail Data Users</li>
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
          <h3 class="card-title">Biodata User</h3>

        </div>
        <div class="card-body">

          <div class="row mb-2">
            <div class="col-sm-12">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>Username</td>
                    <td><?= $view_user->username ?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><?= $view_user->email ?></td>
                  </tr>
                  <tr>
                    <td>Tanggal Buat</td>
                    <td><?= $view_user->created_at ?></td>
                  </tr>
                  <tr>
                    <td>Terakhir Login</td>
                    <td><?= $view_user->last_login ?></td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td><?= $view_user->status ?></td>
                  </tr>
                  <tr>
                    <td>Role</td>
                    <td><?= $view_user->role ?></td>
                  </tr>
                </tbody>
              </table>
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