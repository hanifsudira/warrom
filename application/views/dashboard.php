<?php for ($i=0;$i<count($clear);$i++){
        if($clear[$i]->witel == "JAKBAR"){
            $show1 = $clear[$i]->nalhi;
            $show2 = $clear[$i]->nalmtd;
            $show3 = (float)$clear[$i]->achmtd*100;
            $show4 = $i+1;
        }
    }
?>

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
                        <p class="category">Last Update : <strong data-background-color="red"><?php echo $clear[0]->lastupdate?></strong></p>
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
                            <th>TARGET MTD</th>
                            <th>ACH MTD</th>
                            <th>RANK</th>
                            </thead>
                            <tbody>
                            <?php for ($i=0;$i<count($clear);$i++){?>
                                <?php if($clear[$i]->witel=="JAKBAR") {?>
                                    <?php echo '<tr bgcolor="yellow">';}else{ ?>
                                    <?php echo '<tr>';} ?>
                                        <td><?php echo $clear[$i]->witel?></td>
                                        <td><?php echo $clear[$i]->ps3p?></td>
                                        <td><?php echo $clear[$i]->ps2p?></td>
                                        <td><?php echo $clear[$i]->pstot?></td>
                                        <td><?php echo $clear[$i]->churn?></td>
                                        <td><?php echo $clear[$i]->nalhi?></td>
                                        <td><?php echo $clear[$i]->nalmtd?></td>
                                        <td><?php echo $clear[$i]->target?></td>
                                        <td><?php echo ceil($clear[$i]->targetmtd)?></td>
                                        <?php $shows = $clear[$i]->achmtd*100;?>
                                        <td><?php echo number_format($shows,2)."%";?></td>
                                        <td><?php echo $i+1?></td>
                                    </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>