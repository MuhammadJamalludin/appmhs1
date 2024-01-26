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
        <div class="row">
            <div class="col-sm-12">
                <?php Flasher::Message(); ?>
            </div>
        </div>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $data['title'] ?></h3>
                <a href="<?= base_url; ?>/nilai/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Nilai</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Mahasiswa</th>
                            <th>Matakuliah</th>
                            <th>Nilai</th>
                            <th style="width: 150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data['nilai'] as $row) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['NamaMahasiswa']; ?></td>
                                <td><?= $row['nama_matakuliah']; ?></td>
                                <td><?= $row['Nilai']; ?></td>
                                <td>
                                    <a href="<?= base_url; ?>/nilai/edit/<?= $row['ID_Nilai'] ?>" class="badge badge-info ">Edit</a>
                                    <a href="<?= base_url; ?>/nilai/hapus/<?= $row['ID_Nilai'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->