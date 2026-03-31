<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Fhr</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Mfchr</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
        <li class="nav-item"><a class="nav-link" href="#achievement">Achievement</a></li>
        <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<?php
$profile = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM profile LIMIT 1"));
?>
<section id="home" class="hero-section d-flex align-items-center text-white">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6 fade-up">
        <h1 class="fw-bold">
          Hi 👋, Saya <span class="highlight"><?= $profile['nama']; ?></span>
        </h1>
        <p class="mt-3"><?= $profile['deskripsi']; ?></p>
        <a href="#about" class="btn btn-warning mt-3">Lihat Selengkapnya</a>
      </div>

      <!-- FIX GAMBAR HERO -->
      <div class="col-lg-6 text-center fade-right">
        <img src="<?= $profile['foto']; ?>" class="img-fluid hero-img">
      </div>

    </div>
  </div>
</section>

<!-- ABOUT -->
<?php
$about = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM about LIMIT 1"));
?>
<section id="about" class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 fade-up">About Me</h2>

    <div class="row">
      <div class="col-lg-6 fade-left">
        <p><?= $about['isi']; ?></p>

        <h5 class="mt-4">Project</h5>
        <ul class="project-list">
          <?php
          $project = mysqli_query($conn, "SELECT * FROM project");
          while ($p = mysqli_fetch_assoc($project)) {
              echo "<li>{$p['nama_project']}</li>";
          }
          ?>
        </ul>
      </div>

      <div class="col-lg-6 fade-right">
        <h5 class="mb-3">Skills</h5>

        <?php
        $skills = mysqli_query($conn, "SELECT * FROM skills");
        while ($s = mysqli_fetch_assoc($skills)) {
        ?>
          <p><?= $s['nama_skill']; ?></p>
          <div class="progress mb-3">
            <div class="progress-bar bg-warning" style="width:<?= $s['persentase']; ?>%"></div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
</section>

<!-- ACHIEVEMENT -->
<section id="achievement" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 fade-up">Achievement</h2>

    <div class="row justify-content-center">
      <?php
      $ach = mysqli_query($conn, "SELECT * FROM achievement");
      while ($a = mysqli_fetch_assoc($ach)) {
      ?>
      <div class="col-md-6 fade-up">
        <div class="achievement-box text-center">
          <h2>🏅</h2>
          <h5 class="fw-bold"><?= $a['judul']; ?></h5>
          <p class="mb-0 text-center"><?= $a['tahun']; ?></p>
          <small><?= $a['deskripsi']; ?></small>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- CERTIFICATES -->
<section id="certificates" class="py-5 bg-dark text-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 fade-up">Certificates</h2>

    <div class="row g-4">
      <?php
      $cert = mysqli_query($conn, "SELECT * FROM certificates");
      while ($c = mysqli_fetch_assoc($cert)) {
      ?>
      <div class="col-md-4 fade-up">
        <div class="card h-100">
          
          <!-- FIX GAMBAR CERTIFICATE -->
          <img src="<?= $c['gambar']; ?>" class="card-img-top">

          <div class="card-body text-center">
            <h5><?= $c['nama']; ?></h5>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>

  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
const elements = document.querySelectorAll('.fade-up, .fade-left, .fade-right');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    }
  });
}, { threshold: 0.2 });

elements.forEach(el => observer.observe(el));
</script>

</body>
</html>