<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">

            <body class="text-dark">
                <header class="p-3 mb-2 text-dark">
                    <h3>
                        <center>Form Tambah Data Peminjam</center>
                    </h3>

                </header>

                <form action="/perpus/save" method="POST">
                    <?= csrf_field(); ?>

                    <fieldset>
                        <div class="w-50 mx-auto border p-3 mt-0">

                            <label for="nama_angotta">Nama Lengkap</label>
                            <input class="form-control" type="text" id="nama_anggota" name="nama_anggota" required autofocus>

                            <label for="kode_anggota">Kode Keanggotaan</label>
                            <input class="form-control" type="text" id="kode_anggota" name="kode_anggota" required>

                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir" required>

                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir" required>

                            <div class='col d-flex justify-content-center'>
                                <input class="btn btn-dark mt-3" type="submit" name="proses" value="Submit" required>
                        </div>
                </form>
        </div>
        <p>
        <h6>
            <center>Copyright by Fadhlan Akbarullah</center>
        </h6>
        </p>
    </div>
</div>
</div>
<?= $this->endSection(); ?>