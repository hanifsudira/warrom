<div class="content">
    <div class="container-fluid">
        <div class="title">
            <h2>Semua Tiket</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h1><?php echo $tiket[0]->telepon;?></h1>
                    </div>
                    <div class="card-content">
                        <h3 class="title">TELEPON</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h1><?php echo $tiket[0]->internet;?></h1>
                    </div>
                    <div class="card-content">
                        <h3 class="title">INTERNET</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h1><?php echo $tiket[0]->iptv;?></h1>
                    </div>
                    <div class="card-content">
                        <h3 class="title">IPTV</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <h2>Tiket Lebih 2 Hari</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" data-background-color="red">
                        <h1><?php echo $tiket[0]->telepon2;?></h1>
                    </div>
                    <div class="card-content">
                        <h3 class="title">TELEPON</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" data-background-color="red">
                        <h1><?php echo $tiket[0]->internet2;?></h1>
                    </div>
                    <div class="card-content">
                        <h3 class="title">INTERNET</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" data-background-color="red">
                        <h1><?php echo $tiket[0]->iptv2;?></h1>
                    </div>
                    <div class="card-content">
                        <h3 class="title">IPTV</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>