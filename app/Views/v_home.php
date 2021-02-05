<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>

<?= $this->section('isi'); ?>

<div class="page-wrapper">
    <div class="page-header">
        <div class="page-header-title">
            <h4>Dashboard</h4>
        </div>
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index-2.html">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                </li>
            </ul>
        </div>
    </div>


    <div class="alert alert-primary background-primary">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="icofont icofont-close-line-circled text-white"></i>
        </button>
        <strong>Welcome!</strong> to the Masjid Al-Hikmah information system.
    </div>

    <div class="page-body">
        <div class="row">
            <div class="col-md-12 col-xl-4">

                <div class="card table-card">
                    <div class="">
                        <div class="row-table">
                            <div class="col-sm-6 card-block-big br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icofont icofont-eye-alt text-success"></i>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h5>10k</h5>
                                        <span>Visitors</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-block-big">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icofont icofont-ui-music text-danger"></i>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h5>100%</h5>
                                        <span>Volume</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="row-table">
                            <div class="col-sm-6 card-block-big br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icofont icofont-files text-info"></i>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h5>2000 +</h5>
                                        <span>Files</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-block-big">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icofont icofont-envelope-open text-warning"></i>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h5>120</h5>
                                        <span>Mails</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-xl-4">

                <div class="card table-card">
                    <div class="">
                        <div class="row-table">
                            <div class="col-sm-6 card-block-big br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div id="barchart" style="height:40px;width:40px;"></div>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h5>1000</h5>
                                        <span>Shares</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-block-big">
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <i class="icofont icofont-network text-primary"></i>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h5>600</h5>
                                        <span>Network</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="row-table">
                            <div class="col-sm-6 card-block-big br">
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <div id="barchart2" style="height:40px;width:40px;"></div>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h5>350</h5>
                                        <span>Returns</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-block-big">
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <i class="icofont icofont-network-tower text-primary"></i>
                                    </div>
                                    <div class="col-sm-8 text-center">
                                        <h5>100%</h5>
                                        <span>Connect</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card table-card widget-primary-card">
                    <div class="">
                        <div class="row-table">
                            <div class="col-sm-3 card-block-big">
                                <i class="icofont icofont-star"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>4000 +</h4>
                                <h6>Ratings Received</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card table-card widget-success-card">
                    <div class="">
                        <div class="row-table">
                            <div class="col-sm-3 card-block-big">
                                <i class="icofont icofont-trophy-alt"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>17</h4>
                                <h6>Achievements</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary btn-sm">Week</button>
                        <button class="btn btn-primary btn-sm">Month</button>
                        <button class="btn btn-primary btn-sm">Year</button>
                    </div>
                    <div class="card-block">
                        <div id="morris-extra-area"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>