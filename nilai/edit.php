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
            <form role="form" action="<?= base_url; ?>/nilai/updateNilai" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['nilai']['ID_Nilai']; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>Mahasiswa</label>
                        <select class="form-control" name="mahasiswa_id">
                            <?php foreach ($data['mahasiswa'] as $mahasiswa) : ?>
                                <option value="<?= $mahasiswa['MahasiswaID']; ?>" <?= ($mahasiswa['MahasiswaID'] == $data['nilai']['ID_Mahasiswa']) ? 'selected' : ''; ?>><?= $mahasiswa['Nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Matakuliah</label>
                        <select class="form-control" name="matakuliah_id">
                            <?php foreach ($data['matakuliah'] as $matakuliah) : ?>
                                <option value="<?= $matakuliah['id']; ?>" <?= ($matakuliah['id'] == $data['nilai']['Kode_MataKuliah']) ? 'selected' : ''; ?>><?= $matakuliah['nama_matakuliah']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="number" class="form-control" placeholder="Masukkan nilai..." name="nilai" value="<?= $data['nilai']['Nilai']; ?>">
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