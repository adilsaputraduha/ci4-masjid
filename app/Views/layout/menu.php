<?= $this->extend('layout/main'); ?>

<?= $this->section('menu'); ?>

<ul class="nav pcoded-inner-navbar ">
    <li class="nav-item pcoded-menu-caption">
        <label>Navigasi</label>
    </li>
    <li class="nav-item">
        <a href="/home" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
    </li>
    <li class="nav-item pcoded-hasmenu">
        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="icofont icofont-layout"></i></span><span class="pcoded-mtext">Master</span></a>
        <ul class="pcoded-submenu">
            <li><a href="/jenispemasukan">Jenis Pemasukan</a></li>
            <li><a href="/jenispengeluaran">Jenis Pengeluaran</a></li>
            <li><a href="/donatur">Donatur</a></li>
        </ul>
    </li>
    <li class="nav-item pcoded-hasmenu">
        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="icofont icofont-list"></i></span><span class="pcoded-mtext">Transaksi</span></a>
        <ul class="pcoded-submenu">
            <li><a href="/pembayarandonatur">Pembayaran Donatur</a></li>
            <li><a href="/uangmasuk">Uang Masuk</a></li>
            <li><a href="/uangkeluar">Uang Keluar</a></li>
        </ul>
    </li>
    <li class="nav-item pcoded-hasmenu">
        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="icofont icofont-notebook"></i></span><span class="pcoded-mtext">Laporan</span></a>
        <ul class="pcoded-submenu">
            <li><a href="uangmasuk/reportfilter">Lap Uang Masuk</a></li>
            <li><a href="uangkeluar/reportfilter">Lap Uang Keluar</a></li>
        </ul>
    </li>



    <li class="nav-item pcoded-menu-caption">
        <label>Pengaturan</label>
    </li>

    <!-- Jika Super Admin -->

    <?php if (in_groups('super-admin')) : ?>
        <li class="nav-item">
            <a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Pengguna</span></a>
        </li>
        <li class="nav-item">
            <a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Info Masjid</span></a>
        </li>
    <?php endif; ?>

    <li class="nav-item">
        <a href="/gantipassword" class="nav-link "><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Ganti Password</span></a>
    </li>
    <li class="nav-item">
        <a href="<?= base_url('logout'); ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Logout</span></a>
    </li>
</ul>

<?= $this->endSection(); ?>