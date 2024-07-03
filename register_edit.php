<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 

$connection = mysqli_connect("localhost", "root", "", "admin_panel");

if(isset($_POST['edit_btn'])) {
    $id = $_POST['edit_id'];
    $query = "SELECT * FROM register WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_num_rows($query_run) > 0) {
        $row = mysqli_fetch_assoc($query_run);
    } else {
        // Handle the case where no data is found for the given ID
        echo "No record found for the given ID.";
        exit();
    }
}

if(isset($_POST['update_btn'])) {
    $id = $_POST['edit_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE ID='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run) {
        echo "Data updated successfully";
    } else {
        echo "Failed to update data";
    }
}
?>

<div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile</h6>
        </div>

        <div class="card-body">
            <form action="code.php" method="POST">
                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="edit_username" value="<?php echo $row['username']; ?>" class="form-control" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="edit_email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="edit_password" value="<?php echo $row['password']; ?>" class="form-control" placeholder="Enter Password">
                </div>
                <a href="register.php" class="btn btn-danger">CANCEL</a>
                <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>


