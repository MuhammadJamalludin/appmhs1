<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Jadwal Kuliah</h1>
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
            <form role="form" action="<?= base_url; ?>/jadwalkuliah/updateJadwalKuliah" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['jadwalkuliah']['id']; ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label>Kode Jadwal</label>
                        <input type="text" class="form-control" placeholder="Masukkan kode jadwal..." name="kode_jadwal" value="<?= $data['jadwalkuliah']['kode_jadwal']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Mata Kuliah</label>
                        <select class="form-control" name="id_matakuliah">
                            <?php foreach ($data['matakuliah'] as $matakuliah) : ?>
                                <option value="<?= $matakuliah['id']; ?>" <?= ($matakuliah['id'] == $data['jadwalkuliah']['id_matakuliah']) ? 'selected' : ''; ?>>
                                    <?= $matakuliah['matakuliah']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hari</label>
                        <input type="text" class="form-control" placeholder="Masukkan hari..." name="hari" value="<?= $data['jadwalkuliah']['hari']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jam Mulai</label>
                        <input type="text" class="form-control" placeholder="Masukkan jam mulai..." name="jam_mulai" value="<?= $data['jadwalkuliah']['jam_mulai']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jam Selesai</label>
                        <input type="text" class="form-control" placeholder="Masukkan jam selesai..." name="jam_selesai" value="<?= $data['jadwalkuliah']['jam_selesai']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Ruang</label>
                        <input type="text" class="form-control" placeholder="Masukkan ruang..." name="ruang" value="<?= $data['jadwalkuliah']['ruang']; ?>">
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