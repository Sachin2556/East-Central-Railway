<?php
include('security.php');
// session_start();
 include ('includes/header.php');
 include ('includes/navbar.php');
  
 
 ?>

       
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h1 mb-0 text-gray-600">Welcome to Administrator Console</h1>

<div class="text-right">
<h1 class="h1 mb-0 font-weight-semibold text-gray-600 d-none d-sm-inline-block">Dashboard</h1>

</div>
</div>


<!-- Content Row -->
<div class="row md-6">
   
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Registered Admin</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php
                            require 'database/dbconfig.php';

                               $query =  "SELECT id FROM register ORDER BY id";
                               $query_run = mysqli_query($connection, $query);

                               $row =mysqli_num_rows($query_run);

                               echo '<h4> Total Admin: '.$row.'</h1>';
                        ?>
                      
                        
                    </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-subway fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Revenue Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Revenue (Monthly)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$315,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tickets Sold Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tickets Sold</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">75%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-ticket-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Maintenance Tasks Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Maintenance Tasks</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tools fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


   
</div>
<!-- /.container-fluid -->


 
<?php
include('includes/scripts.php');
include('includes/footer.php');

 
?>
