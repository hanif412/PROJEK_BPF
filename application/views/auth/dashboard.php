<br/>
<br/>
<br/>
<br/>

<br/>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah
                                Produk</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $produk ?></div>
                        </div>
                        <div class="col-auto">
                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah

                                Penjualan</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $penjualan ?></div>
                        </div>
                        <div class="col-auto">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah

                                User</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $us ?></div>
                        </div>
                        <div class="col-auto">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="chart-bar">
                <canvas id="myChart" height="400"></canvas>
            </div>
        </div>
    </div>
</div>
</div>