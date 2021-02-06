<?= $this->extend('layout/main'); ?>

<?= $this->section('menu'); ?>

<nav class="pcoded-navbar" pcoded-header-POSITION="relative">
    <DIV class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></DIV>
    <DIV class="pcoded-inner-navbar main-menu">
        <DIV class="">
            <DIV class="main-menu-header">
                <img class="img-40" src="<?= base_url(); ?>/assets/images/user.png" alt="User-Profile-Image">
                <DIV class="user-details">
                    <span>John Doe</span>
                    <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                </DIV>
            </DIV>
            <DIV class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="user-profile.html"><i class="ti-user"></i>VIEW PROFILE</a>
                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                        <a href="#!"><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>
                </ul>
            </DIV>
        </DIV>
        <DIV class="pcoded-navigatio-lavel" DATA-i18n="nav.category.navigation" menu-title-theme="theme5">Navigasi</DIV>
        <ul class="pcoded-item pcoded-left-item">
            <li class=" ">
                <a href="/home" DATA-i18n="nav.widget.main">
                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" DATA-i18n="nav.navigate.main">
                    <span class="pcoded-micon"><i class="ti-layout-cta-right"></i></span>
                    <span class="pcoded-mtext">Master</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="navbar-light.html" DATA-i18n="nav.navigate.navbar">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Navbar</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="navbar-dark.html" DATA-i18n="nav.navigate.navbar-inverse">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Navbar Inverse</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="navbar-elements.html" DATA-i18n="nav.navigate.navbar-with-elements">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Navbar WITH Elements</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" DATA-i18n="nav.navigate.main">
                    <span class="pcoded-micon"><i class="ti-layout-cta-right"></i></span>
                    <span class="pcoded-mtext">Transaksi</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="/cashin" DATA-i18n="nav.navigate.navbar">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Uang Masuk</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/cashout" DATA-i18n="nav.navigate.navbar-inverse">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext">Uang Keluar</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <DIV class="pcoded-navigatio-lavel" DATA-i18n="nav.category.ui-element" menu-title-theme="theme5">Pengaturan</DIV>
        <ul class="pcoded-item pcoded-left-item">
            <li class=" ">
                <a href="widget.html" DATA-i18n="nav.widget.main">
                    <span class="pcoded-micon"><i class="ti-home"></i></span>
                    <span class="pcoded-mtext">Users Setting</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </DIV>
</nav>

<?= $this->endSection(); ?>