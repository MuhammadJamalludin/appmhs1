<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $data['title']; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url; ?>/matakuliah/simpanMatakuliah" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Kode Matakuliah</label>
                        <input type="text" class="form-control" placeholder="Masukkan kode matakuliah..." name="kode_matakuliah">
                    </div>
                    <div class="form-group">
                        <label>Nama Matakuliah</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama matakuliah..." name="nama_matakuliah">
                    </div>
                    <div class="form-group">
                        <label>SKS</label>
                        <input type="text" class="form-control" placeholder="Masukkan SKS..." name="sks">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->