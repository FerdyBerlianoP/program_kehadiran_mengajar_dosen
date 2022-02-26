<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('dosen') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'hadirs' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Hadir</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('dosen/ganjil1819s') ?>">Ganjil 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('dosen/genap1819s') ?>">Genap 2018/2019</a>
            <a class="dropdown-item" href="<?php echo site_url('dosen/ganjil1920s') ?>">Ganjil 2019/2020</a>
            <a class="dropdown-item" href="<?php echo site_url('dosen/hadirs') ?>">Genap 2019/2020</a>
        </div>
    </li>
    
</ul>