<?php
include('security.php');
// session_start();

$connection = mysqli_connect("localhost","root","","admin_panel");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    // $email_query = "SELECT * FROM register WHERE email='$email' ";
    // $email_query_run = mysqli_query($connection, $email_query);
    // if(mysqli_num_rows($email_query_run) > 0)
    // {
    //     $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
    //     $_SESSION['status_code'] = "error";
    //     header('Location: register.php');  
    // }
    // else
    // {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                // $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                // $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            // $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

    $connection = mysqli_connect("localhost","root","","admin_panel");
    if(isset($_POST['edit_btn']))
    {
        $id = $_POST['edit_id'];
       
        $query= "SELECT * FROM register WHERE ID='$id";
        $query_run = mysqli_query($connection, $query);
    }



  if(isset($_POST['updatebtn'])){
    $id = $_POST['edit_id'];
      $username = $_POST['edit_username'];
      $email = $_POST['edit_email'];
      $password = $_POST['edit_password'];

      $query = "UPDATE register SET username='$username',email='$email', password = '$password' WHERE id= '$id' ";
      $query_run = mysqli_query($connection, $query);

      if($query_run){
       $_SESSION['success'] = "your Data is Updated";
       header('Location: register.php');
      }
      else {
        $_SESSION['status'] = "your Data is NOT Updated";
        header('Location: register.php');
      }
  }


  if(isset($_POST['delete_btn']))
  {
    $id = $_POST['delete_id'];

    $query = " DELETE  FROM register  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location: register.php');
    }
    else {
        $_SESSION['status'] = "Your Data is not DELETED";
        header('Location: register.php');
    }

  }

 


  $connection = mysqli_connect("localhost","root","","admin_panel");
    
  
  
  
  if(isset($_POST['login_btn'])){
      $email_login = $_POST['email'];
      $password_login = $_POST['password'];
  
      // Use prepared statement to prevent SQL injection
      $query = "SELECT * FROM register WHERE email=? AND password=?";
      $stmt = mysqli_prepare($connection, $query);
      
      // Bind parameters
      mysqli_stmt_bind_param($stmt, "ss", $email_login, $password_login);
      
      // Execute query
      mysqli_stmt_execute($stmt);
      
      // Store result
      $result = mysqli_stmt_get_result($stmt);
      
      // Check if there is a row with matching credentials
      if(mysqli_num_rows($result) == 1){
          $_SESSION['username'] = $email_login;
          header('Location: index.php');
        //   exit; // Ensure script stops after redirection
      } 
      else {
          $_SESSION['status'] = 'Email id / Password is Invalid';
          header('Location: login.php');
        //   exit; // Ensure script stops after redirection
      }   
  }
 



  if(isset($_POST['logout_btn'])){

    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
  }

?>