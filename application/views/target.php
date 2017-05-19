<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="#" class="simple-text">
                Witel Jakarta Barat
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <a href="<?php echo base_url()?>">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
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
                    <a class="navbar-brand" href="#">TARGET</a>
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
                    <div class="col-lg-12 col-md-12">
                        <div class="card card-plain">
                            <div class="card-header" data-background-color="green">
                                <h4 class="title">Regional 2 </h4>
                                <p class="category">Focus On Jakarta Barat</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table id="datatable" class="table table-hover">
                                    <thead class="text-warning">
                                    <th>Witel</th>
                                    <th>Target</th>
                                    <th>Bulan</th>
                                    <th>Tahun</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($target as $t){?>
                                        <?php
                                            $dateObj   = DateTime::createFromFormat('!m', $t->bulan);
                                            $name = $dateObj->format('F');
                                        ?>
                                        <tr>
                                            <td><?php echo $t->witel?></td>
                                            <td><?php echo $t->target?></td>
                                            <td><?php echo $name?></td>
                                            <td><?php echo $t->tahun?></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

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