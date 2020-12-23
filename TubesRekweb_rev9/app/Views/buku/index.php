<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<!-- <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Dilan</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="buku/index.php" class="btn btn-outline-dark btn-sm">Banyak Lagi</a>
          </div>
        </div>
      </div> -->
<!-- Page Heading -->
<div class="container">
    <div class="row mt-3 justify-content-center">
        <h1 class=" h3 mb-4 text-gray-800 text-center">Daftar Buku</h1>
    </div>
    <div class="row">
        <?php foreach ($komik as $k) : ?>
            <div class="col-md-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img src="/img/<?= $k['sampul'] ?>" width="120" class="card-img-top">
                        <h5 class="card-title"><?= $k['judul'] ?></h5>
                        <p>Penulis: <?= $k['penulis'] ?></p>
                        <p>Penulis: <?= $k['penerbit'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection(); ?>