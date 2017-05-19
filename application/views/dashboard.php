<?php for ($i=0;$i<count($clear);$i++){
        if($clear[$i][0] == "JAKBAR"){
            $show1 = $clear[$i][5];
            $show2 = $clear[$i][6];
            $show3 = $clear[$i][8];
            $show4 = $i+1;
        }
    }
?>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="#" class="simple-text">
                Witel Jakarta Barat
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>target">
                        <i class="material-icons">content_paste</i>
                        <p>Target Data</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">NAL INDIHOME JAKARTA BARAT</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Logout</a></li>
                                <li><a href="#">Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-content">
                                <p class="category">HI</p>
                                <h1 class="title"><?php echo $show1?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-content">
                                <p class="category">MTD</p>
                                <h1 class="title"><?php echo $show2?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-content">
                                <p class="category">ACH MTD</p>
                                <h1 class="title"><?php echo  number_format($show3,2)."%";?></h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-content">
                                <p class="category">RANK TR2</p>
                                <h1 class="title"><?php echo $show4?></h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="green">
                                <h4 class="title">Regional 2 </h4>
                                <p class="category">Last Update : <strong data-background-color="red"><?php echo $selesai?></strong></p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-warning">
                                    <th>WITEL</th>
                                    <th>PS 3P</th>
                                    <th>PS 2P</th>
                                    <th>PS TOTAL</th>
                                    <th>CHURN</th>
                                    <th>NAL HI</th>
                                    <th>NAL MTD</th>
                                    <th>TARGET</th>
                                    <th>ACH MTD</th>
                                    <th>RANK</th>
                                    </thead>
                                    <tbody>
                                    <?php for ($i=0;$i<count($clear);$i++){?>
                                        <?php if($clear[$i][0]=="JAKBAR") {?>
                                        <?php echo "<tr bgcolor=\"yellow\">"?>
                                                <td><?php echo $clear[$i][0]?></td>
                                                <td><?php echo $clear[$i][1]?></td>
                                                <td><?php echo $clear[$i][2]?></td>
                                                <td><?php echo $clear[$i][3]?></td>
                                                <td><?php echo $clear[$i][4]?></td>
                                                <td><?php echo $clear[$i][5]?></td>
                                                <td><?php echo $clear[$i][6]?></td>
                                                <td><?php echo $clear[$i][7]?></td>
                                                <?php $shows = $clear[$i][8];?>
                                                <td><?php echo number_format($shows,2)."%";?></td>
                                                <td><?php echo $i+1?></td>
                                            </tr>
                                        <?php } else { echo "<tr>"?>
                                            <td><?php echo $clear[$i][0]?></td>
                                            <td><?php echo $clear[$i][1]?></td>
                                            <td><?php echo $clear[$i][2]?></td>
                                            <td><?php echo $clear[$i][3]?></td>
                                            <td><?php echo $clear[$i][4]?></td>
                                            <td><?php echo $clear[$i][5]?></td>
                                            <td><?php echo $clear[$i][6]?></td>
                                            <td><?php echo $clear[$i][7]?></td>
                                            <?php $shows = $clear[$i][8];?>
                                            <td><?php echo number_format($shows,2)."%";?></td>
                                            <td><?php echo $i+1?></td>
                                        </tr>

                                    <?php } }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="card">-->
<!--                            <div class="card-header card-chart" data-background-color="green">-->
<!--                                <div class="ct-chart" id="chartBehaviour"></div>-->
<!--                            </div>-->
<!--                            <div class="card-content">-->
<!--                                <h4 class="title">Daily Sales</h4>-->
<!--                                <p class="category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 55%  </span> increase in today sales.</p>-->
<!--                            </div>-->
<!--                            <div class="card-footer">-->
<!--                                <div class="stats">-->
<!--                                    <i class="material-icons">access_time</i> updated 4 minutes ago-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="pull-left">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
<!--                <p class="pull-right">-->
<!--                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="h#">Hanif Sudira</a>, Made With Love-->
<!--                </p>-->
            </div>
        </footer>
    </div>
</div>