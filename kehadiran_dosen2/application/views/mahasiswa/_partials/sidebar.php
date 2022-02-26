<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('mahasiswa') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'kehadirans' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Hadir</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadirans') ?>">Genap 2019/2020</a>
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadirans') ?>">Genap 2019/2020</a>
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadirans') ?>">Genap 2019/2020</a>
            <a class="dropdown-item" href="<?php echo site_url('mahasiswa/kehadirans') ?>">Genap 2019/2020</a>
        </div>
    </li>
    
</ul>