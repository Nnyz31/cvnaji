<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>
        <?php if (($page ?? 'home') === 'home'): ?>
            <?= esc($biodata['nama_lengkap'] ?? 'Curriculum Vitae') ?>
        <?php else: ?>
            <?= ucfirst($page) ?> - <?= esc($biodata['nama_lengkap'] ?? 'Curriculum Vitae') ?>
        <?php endif; ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body class="bg-main">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark nav-blur sticky-top">
    <div class="container">
        <a class="navbar-brand fw-semibold d-flex align-items-center gap-2" href="<?= base_url('/') ?>">
            <span class="brand-badge">CV</span>
            <span><?= esc($biodata['nama_lengkap'] ?? '') ?></span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link <?= ($page=='home')?'active':'' ?>" href="<?= base_url('/') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($page=='pendidikan')?'active':'' ?>" href="<?= base_url('pendidikan') ?>">Pendidikan</a></li>
                <li class="nav-item"><a class="nav-link <?= ($page=='pengalaman')?'active':'' ?>" href="<?= base_url('pengalaman') ?>">Pengalaman</a></li>
                <li class="nav-item"><a class="nav-link <?= ($page=='skills')?'active':'' ?>" href="<?= base_url('skills') ?>">Skills</a></li>
                <li class="nav-item"><a class="nav-link <?= ($page=='portofolio')?'active':'' ?>" href="<?= base_url('portofolio') ?>">Portofolio</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php $page = $page ?? 'home'; ?>

<!-- HOME -->
<?php if ($page === 'home'): ?>
<section class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-4 text-center">
                <div class="profile-picture-wrapper mx-auto">
                    <img 
                        src="<?= base_url('img/' . esc($biodata['foto'] ?? '')) ?>" 
                        alt="<?= esc($biodata['nama_lengkap']) ?>" 
                        class="img-fluid rounded-circle profile-picture">
                </div>
            </div>

            <div class="col-md-8">
                <h1 class="fw-bold text-white mb-1 hero-heading">
                    <?= esc($biodata['nama_lengkap']) ?>
                </h1>

                <p class="text-accent fs-5 mb-3 hero-subtitle">
                    <?= esc($biodata['posisi'] ?? '') ?>
                </p>

                <p class="text-light mb-4 hero-text">
                    <?= esc($biodata['ringkasan'] ?? '') ?>
                </p>

                <div class="row gy-3 text-light mb-4 hero-contact">
                    <div class="col-md-4">
                        <i class="bi bi-envelope"></i>
                        <span class="ms-2 small"><?= esc($biodata['email'] ?? '-') ?></span>
                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-telephone"></i>
                        <span class="ms-2 small"><?= esc($biodata['no_hp'] ?? '-') ?></span>
                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-geo-alt"></i>
                        <span class="ms-2 small"><?= esc($biodata['alamat'] ?? '-') ?></span>
                    </div>
                </div>

                <div class="d-flex flex-wrap gap-3 hero-actions">
                    <a href="<?= base_url('pendidikan') ?>" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-mortarboard me-2"></i> Pendidikan
                    </a>
                    <a href="<?= base_url('pengalaman') ?>" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-briefcase me-2"></i> Pengalaman
                    </a>
                    <a href="<?= base_url('skills') ?>" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-stars me-2"></i> Skills
                    </a>
                    <a href="<?= base_url('portofolio') ?>" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-grid-3x3-gap me-2"></i> Portofolio
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- PENDIDIKAN -->
<?php if ($page === 'pendidikan'): ?>
<section class="section-page section-pendidikan">
    <div class="container">

        <div class="section-header mb-4 d-flex justify-content-between align-items-center">
            <div>
                <h2 class="section-title mb-1">
                    <i class="bi bi-mortarboard me-2"></i>Riwayat Pendidikan
                </h2>
                <p class="text-light small opacity-75 mb-0">
                    Jejak pendidikan formal yang membentuk dasar kemampuan saya di bidang teknologi dan pengembangan web.
                </p>
            </div>
            <a href="<?= base_url('/') ?>" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

        <?php if (! empty($pendidikan)): ?>

            <!-- chip info kecil biar gak kosong -->
            <div class="education-chips d-flex flex-wrap gap-2 mb-4">
                <span class="badge edu-chip">
                    <i class="bi bi-mortarboard me-1"></i> Pendidikan formal
                </span>
                <span class="badge edu-chip">
                    <i class="bi bi-clock-history me-1"></i> Timeline <?= count($pendidikan) ?> jenjang
                </span>
                <span class="badge edu-chip">
                    <i class="bi bi-geo-alt me-1"></i> Bogor & Sukabumi
                </span>
            </div>

            <!-- timeline dengan garis dan animasi -->
            <div class="timeline timeline-animated">
                <?php foreach ($pendidikan as $p): ?>
                    <div class="timeline-item fade-card">
                        <div class="timeline-marker">
                            <span class="inner-dot"></span>
                        </div>

                        <div class="timeline-card card border-0 shadow-sm mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between flex-wrap mb-1">
                                    <div class="d-flex align-items-center gap-2">
                                        <!-- kamu bisa ganti icon ini dengan logo institusi nanti -->
                                        <div class="edu-icon-circle">
                                            <i class="bi bi-mortarboard-fill"></i>
                                        </div>
                                        <h5 class="card-title mb-0"><?= esc($p['nama_institusi']) ?></h5>
                                    </div>
                                    <span class="badge bg-accent-soft text-accent edu-year-pill">
                                        <?= esc($p['tahun_mulai']) ?> - <?= esc($p['tahun_selesai']) ?>
                                    </span>
                                </div>

                                <p class="mb-1 text-accent small">
                                    <?= esc($p['jenjang']) ?> - <?= esc($p['jurusan']) ?>
                                </p>

                                <p class="mb-0 text-light-50 small">
                                    Fokus pada pengembangan kompetensi di bidang teknologi dan pemrograman sebagai fondasi karier Web Developer.
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php else: ?>
            <p class="text-light">Belum ada data pendidikan.</p>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>


<!-- PENGALAMAN -->
<?php if ($page === 'pengalaman'): ?>
<section class="section-page section-pengalaman">
    <div class="container">

        <div class="section-header mb-4 d-flex justify-content-between align-items-center">
            <div>
                <h2 class="section-title mb-1">
                    <i class="bi bi-briefcase me-2"></i>Riwayat Pengalaman
                </h2>
                <p class="text-light small opacity-75 mb-0">
                    Pengalaman organisasi, magang, dan proyek yang membentuk cara saya bekerja dan berpikir sebagai Web Developer.
                </p>
            </div>
            <a href="<?= base_url('/') ?>" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

        <?php if (! empty($pengalaman)): ?>

            <div class="experience-timeline">
                <?php $i = 0; ?>
                <?php foreach ($pengalaman as $exp): ?>
                    <?php
                        $side  = ($i % 2 === 0) ? 'left' : 'right';
                        $delay = 0.3 * $i; // untuk animasi satu-satu
                    ?>
                    <div class="exp-item exp-<?= $side ?>">
                        <div class="exp-card card border-0" style="--delay: <?= $delay ?>s;">
                            <div class="exp-card-body card-body">
                                <div class="d-flex justify-content-between flex-wrap mb-1">
                                    <h5 class="card-title mb-0"><?= esc($exp['posisi']) ?></h5>
                                    <span class="badge bg-accent-soft text-accent exp-year-pill">
                                        <?= esc($exp['tahun_mulai']) ?> - <?= esc($exp['tahun_selesai']) ?>
                                    </span>
                                </div>
                                <p class="mb-1 text-accent small">
                                    <?= esc($exp['institusi']) ?><?php if (! empty($exp['kategori'])): ?> • <?= esc($exp['kategori']) ?><?php endif; ?>
                                </p>
                                <p class="small text-light mb-0">
                                    <?= esc($exp['deskripsi'] ?? '') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>

        <?php else: ?>
            <p class="text-light">Belum ada pengalaman.</p>
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>

<!-- SKILLS -->
<?php if ($page === 'skills'): ?>
<section class="section-page section-skills">
    <div class="container">

        <div class="section-header mb-5 d-flex justify-content-between align-items-center">
            <h2 class="section-title mb-0"><i class="bi bi-stars me-2"></i>Skills</h2>
            <a href="<?= base_url('/') ?>" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

        <?php if (! empty($skills)): ?>
            <div class="row g-4 justify-content-center">

                <?php $i = 0; ?>
                <?php foreach ($skills as $s): ?>
                    <?php
                        $name  = strtolower($s['nama_skill']);

                        // mapping icon pakai Bootstrap Icons, mirip contoh kamu
                        $icons = [
                            'html'      => 'bi-filetype-html',
                            'css'       => 'bi-filetype-css',
                            'database'  => 'bi-database',
                            'mysql'     => 'bi-database',
                            'javascript'=> 'bi-filetype-js',
                            'js'        => 'bi-filetype-js',
                            'php'       => 'bi-filetype-php',
                            'react'     => 'bi-lightning-charge',
                            'api'       => 'bi-plug',
                        ];

                        $iconClass = 'bi-stars'; // default

                        foreach ($icons as $key => $val) {
                            if (strpos($name, $key) !== false) {
                                $iconClass = $val;
                                break;
                            }
                        }

                        $delay = 0.15 * $i;
                    ?>

                    <!-- 3 per baris: col-md-4 / col-lg-4 -->
                    <div class="col-md-4 col-lg-4">
                        <div class="skill-card fade-skill" style="--skill-delay: <?= $delay ?>s;">

                            <div class="skill-icon mb-3">
                                <i class="<?= $iconClass ?>"></i>
                            </div>

                            <h5 class="text-white mb-1"><?= esc($s['nama_skill']) ?></h5>

                            <?php if (! empty($s['level'])): ?>
                                <span class="badge bg-accent-soft text-accent mb-2">
                                    <?= esc($s['level']) ?>
                                </span>
                            <?php endif; ?>

                            <p class="small text-light mb-0">
                                <?php if (! empty($s['deskripsi'] ?? null)): ?>
                                    <?= esc($s['deskripsi']) ?>
                                <?php else: ?>
                                    Keahlian ini saya gunakan dalam pengembangan website modern, 
                                    mulai dari tampilan hingga fungsionalitas.
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>

                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-light">Belum ada skills.</p>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<!-- PORTOFOLIO -->
<?php if ($page === 'portofolio'): ?>
<section class="section-page">
    <div class="container">
        <div class="section-header mb-4 d-flex justify-content-between align-items-center">
            <h2 class="section-title mb-0">
                <i class="bi bi-grid-3x3-gap me-2"></i>Portofolio
            </h2>
            <a href="<?= base_url('/') ?>" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

        <?php if (! empty($portofolio)): ?>
            <div class="row g-4">
                <?php foreach ($portofolio as $p): ?>
                    <!-- 2 kolom per baris -->
                    <div class="col-md-6 col-lg-6">
                        <div class="card border-0 shadow-sm h-100 hover-lift fade-card">

                            <?php if (! empty($p['gambar_preview'])): ?>
                                <img
                                    src="<?= base_url('img/' . ltrim($p['gambar_preview'], '/')) ?>"
                                    class="card-img-top portfolio-image"
                                    alt="<?= esc($p['judul']) ?>">
                            <?php endif; ?>

                            <div class="card-body d-flex flex-column">
                                <div class="d-flex justify-content-between mb-1">
                                    <h5 class="card-title mb-0"><?= esc($p['judul']) ?></h5>
                                    <span class="text-accent small"><?= esc($p['tahun']) ?></span>
                                </div>

                                <p class="small text-light flex-grow-1 mb-3">
                                    <?= esc($p['deskripsi']) ?>
                                </p>

                                <?php if (! empty($p['link_project'])): ?>
                                    <a href="<?= esc($p['link_project']) ?>"
                                       target="_blank"
                                       class="btn btn-sm btn-primary w-100 mt-auto">
                                        <i class="bi bi-box-arrow-up-right me-1"></i> Project
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-light">Belum ada portofolio.</p>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>


<footer class="py-3 text-center text-light small footer-glass">
    &copy; <?= date('Y') ?> <?= esc($biodata['nama_lengkap']) ?> • Curriculum Vitae
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
