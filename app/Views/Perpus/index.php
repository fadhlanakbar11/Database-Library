<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col">
        <div class="container">
            <div class="container mt-5"></div>
            <table class="table table-striped table-hover table-bordered bg-light">
                <thead class="thead-light">
                    <h3>
                        <center>Datalist Peminjam Buku Perpustakaan Senang Membaca</center>
                    </h3>
                    <br>
                    <?php if (session()->getFlashdata('Message')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('Message'); ?>
                        <?php endif; ?>
                        <?php if (session()->getFlashdata('Message1')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('Message1'); ?>
                            <?php endif; ?>
                            <tr>
                                <th scope="col">
                                    <center>ID</center>
                                </th>
                                <th scope="col">
                                    <center>NAMA ANGGOTA</center>
                                </th>
                                <th scope="col">
                                    <center>KODE ANGGOTA</center>
                                </th>
                                <th scope="col">
                                    <center>TANGGAL LAHIR</center>
                                </th>
                                <th scope="col">
                                    <center>TEMPAT LAHIR</center>
                                </th>
                                <th scope="col">
                                    <center>TANGGAL PENDAFTARAN</center>
                                </th>
                                <th scope="col">
                                    <center>TINDAKAN</center>
                                </th>
                            </tr>
                            <?php foreach ($perpus as $p) : ?>
                                <tr>
                                    <th scope="row">
                                        <center><?= $p['id']; ?></center>
                                    </th>
                                    <td>
                                        <center><?= $p['nama_anggota']; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $p['kode_anggota']; ?></center>
                                    </td>
                                    <td>
                                        <center><?= $p['tanggal_lahir']; ?></center>
                                    </td>

                                    <td>
                                        <center><?= $p['tempat_lahir']; ?></center>
                                    </td>

                                    <td>
                                        <center><?= $p['tanggal_pendaftaran']; ?></center>
                                    </td>
                                    <td>
                                        <center>
                                            <div class='row'>
                                                <div class='col d-flex justify-content-center'>
                                                    <a href='/perpus/edit/<?= $p['id']; ?>' class='btn btn-info'>Edit</a>
                                                </div>
                                                <div class='col d-flex justify-content-center'>
                                                    <a href='/perpus/delete/<?= $p['id']; ?>' class='btn btn-danger' onclick="return confirm('apakah anda yakin ingin menghapus data?');">Delete</a>
                                        </center>
                                    <?php endforeach; ?>
                            </div>
                            </td>
                </thead>
                <tbody>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>