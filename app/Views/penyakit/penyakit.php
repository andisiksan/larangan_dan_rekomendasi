<?= $this->extend('navbar/navbar') ?>
<?= $this->section('content') ?>



<h1>tetsting</h1>

<div class="form-group row mt-4">
    <label for="penyakit" class="col-sm-2 col-form-label">penyakit</label>
    <div class="col-sm-6">
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Pilih penyakit
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <?php foreach ($penyakit as $p) : ?>
                    <form action="" method="POST">
                        <button type="submit" class="dropdown-item">
                            <input type="hidden" name="penyakitkeyword[]" value="<?= $p['id_penyakit']; ?>">
                            <?= $p['nama_penyakit']; ?>
                        </button>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>






<?= $this->endSection(); ?>