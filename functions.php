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
    

?>