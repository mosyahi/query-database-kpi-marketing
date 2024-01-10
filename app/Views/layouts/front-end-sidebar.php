<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= current_url() ?>">
        <div class="sidebar-brand-text mx-3">Trusmi Test</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?= ($active == 'dashboard' ? 'active' : '') ?>">
        <a class="nav-link" href="<?= base_url('/') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>