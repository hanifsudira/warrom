        <footer class="footer">
            <div class="container-fluid">
                <p class="pull-left">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            </div>
        </footer>
    </div>
</div>
</body>
<script src="<?php echo base_url();?>assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/material.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script src="<?php echo base_url();?>assets/js/material-dashboard.js"></script>
<script src="<?php echo base_url();?>assets/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/js/datatable.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        demo.initDashboardPageCharts();
        $("#datatable").DataTable();
    });
</script>
</html>