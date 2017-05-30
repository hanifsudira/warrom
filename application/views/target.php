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
                            <th>Januri</th>
                            <th>Februari</th>
                            <th>Maret</th>
                            <th>April</th>
                            <th>Mei</th>
                            <th>Juni</th>
                            <th>Juli</th>
                            <th>Agustus</th>
                            <th>September</th>
                            <th>Oktober</th>
                            <th>November</th>
                            <th>Desember</th>
                            </thead>
                            <tbody>
                            <?php foreach ($target as $t){?>
                                <?php if($t[0]=="JAKBAR"){ ?>
                                    <?php echo '<tr bgcolor="yellow">';}else{ ?>
                                    <?php echo '<tr>';}?>
                                    <td><?php echo $t[0]?></td>
                                    <td><?php echo $t[1]?></td>
                                    <td><?php echo $t[2]?></td>
                                    <td><?php echo $t[3]?></td>
                                    <td><?php echo $t[4]?></td>
                                    <td><?php echo $t[5]?></td>
                                    <td><?php echo $t[6]?></td>
                                    <td><?php echo $t[7]?></td>
                                    <td><?php echo $t[8]?></td>
                                    <td><?php echo $t[9]?></td>
                                    <td><?php echo $t[10]?></td>
                                    <td><?php echo $t[11]?></td>
                                    <td><?php echo $t[12]?></td>
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