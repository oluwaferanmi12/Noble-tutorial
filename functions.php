<?php require_once('session.php')?>
<?php 
    function login(){
        if (isset($_SESSION['User_id'])){
            // echo $_SESSION['User_id'];
            return true;
        }
    }
    function confirm_login(){
        if(!login()){
            header("Location:login.php");
        }
    }

    function admin_login(){
        if (isset($_SESSION['Admin_id']) && isset($_SESSION['User_id'])){
            return true;
        }
        else{
            return false;
        }
    }

    function confirm_admin_login(){
        if(!admin_login()){
            header('Location:login.php');
        }
    }

    

?>