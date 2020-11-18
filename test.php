$query ="SELECT * FROM admin WHERE email='$email' AND password = '$password' ";
            $execute = mysqli_query($connection , $query);
            $row = mysqli_fetch_array($execute);
            if ($row['']){
                $_SESSION['User_id'] = $row['id'];
                header("Location:dashboard.php");
            }
            else{
                $_SESSION['ErrorMessage'] = "Wrong Details Entered" ;
            }