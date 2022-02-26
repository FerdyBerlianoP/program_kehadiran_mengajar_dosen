<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'jadwalajas' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Jadwal</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/ganjil1819s') ?>">Ganjil 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/genap1819s') ?>">Genap 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/ganjil1920s') ?>">Ganjil 2019/2020</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/jadwalajas') ?>">Genap 2019/2020</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'mahasiswas' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>Mahasiswa</span></a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/mahasiswas/add') ?>">Tambah Mahasiswa</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/mahasiswas') ?>">Mahasiswa</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'dosens' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>Dosen</span></a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/dosens/add') ?>">Tambah Dosen</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/dosens') ?>">Dosen</a>
        </div>
    </li>
</ul>