<?php include('session.php')?>

<?php 

    if (isset($_SESSION['Admin_id']) && isset($_SESSION['User_id'])){
            $_SESSION['Admin_id'] = null ;
            // $_SESSION['User_id'] = null ;
            header('Location:login.php');
            

            
        }
    else if (isset($_SESSION['User_id'])){
        $_SESSION['User_id']= null;
        header('Location:login.php');
        
        
    }
?>