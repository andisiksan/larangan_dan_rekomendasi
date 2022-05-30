<?= $this->extend('navbar/navbar') ?>
<?= $this->section('content') ?>



<section class="container" id="main">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <form action="#kategori" method="POST" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Nama Penyakit" aria-label="Search" name="penyakitkeyword">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search </button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12 main_text">
            <h2>Pilih komplikasi jika penyakit lebih dari satu untuk mendapatkan rekomendasi dan larangan makanan untuk anda </h2>

            <div class="menu mt-4">
                <div class="form-group">
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Pilih penyakit
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <?php foreach ($penyakit as $k) : ?>
                                <form action="#kategori" method="POST">
                                    <button type="submit" class="dropdown-item">
                                        <input type="hidden" name="penyakitkeyword" value="<?= $k['nama_penyakit']; ?>">
                                        <?= $k['nama_penyakit']; ?>
                                    </button>
                                </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Komplikasi Penyakit
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <form action="#kategori" method="POST">
                                <?php foreach ($penyakit as $p) : ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="penyakitkeyword[]" value="<?= $p['nama_penyakit'] ?>" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            <?= $p['nama_penyakit'] ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                                <button type="submit">cari</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-6 col-sm-12" id="gambar_utama">
            <img src="<?= base_url() ?>/img/gambar_1.png" width="80%" alt="">
        </div>
    </div>
</section>



<!-- pilih penyakit berdasarkan kategori -->
<section class="container" id="kategori">
    <!-- tentang penyakit -->
    <div class="row mt-4">
        <?php foreach ($cari_penyakit as $p) : ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <?= $p['nama_penyakit'] ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text"><?= $p['tentang_penyakit'] ?></p>
                        <a href="#" class="btn btn-primary">Selengkapnya...</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- end tentang penyakit -->
</section>


<!-- ------------------------------------Tentang kami -->
<section class="container" id="about">
    <div class="row">
        <div class="col">
            <h2>Tentang Kami</h2>
            <p>Website ini dibuat sebagai informasi kepada pengguna tentang makanan yang dilarang dan dianjurkan.
                Informasi yang diperoleh tidak terbatas pada satu penyakit untuk pengguna yang komplikasi penyakit juga dpat menemukan larangan dan anjuran makanan dengan
                memilih lebih dari satu penyakit sehingga penanganan penyakit dapat ditangani dengan benar dan tepat</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ------------------------------------end Tentang kami -->


<?= $this->endSection(); ?>