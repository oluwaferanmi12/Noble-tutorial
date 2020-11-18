<?php
    session_start();
    function message(){
        if (isset($_SESSION['ErrorMessage'])){
            $output = "<div style = 'background:#F3B3A6; width:80%; margin:auto; height:36px; margin-bottom:10px; border-radius:8px; font-size:16px; padding-top:6px; font-weight:bolder; text-align:center;margin-top:10px'>{$_SESSION['ErrorMessage']}</div>";
            $_SESSION['ErrorMessage'] = null ;
            return $output;
        }
    }

    function ErrorName(){
        if (isset($_SESSION['NameE'])){
            $output = "<div style = 'background:#F3B3A6; width:80%; margin:auto; height:36px; margin-bottom:10px; border-radius:8px; font-size:16px; padding-top:10px;'>{$_SESSION['NameE']}</div>";
            $_SESSION['NameE'] = null ;
            return $output;
        }
    }

    function EmailError(){
        if (isset($_SESSION['EmailE'])){
            $output = "<div style = 'background:#F3B3A6; width:80%; margin:auto; height:36px; margin-bottom:10px; border-radius:8px; font-size:16px; padding-top:10px;'>{$_SESSION['EmailE']}</div>";
            $_SESSION['EmailE'] = null ;
            return $output;
        }
    }

    function ErrorNumber(){
        if (isset($_SESSION['NumberE'])){
            $output = "<div style = 'background:#F3B3A6; width:80%; margin:auto; height:36px; margin-bottom:10px; border-radius:8px; font-size:16px; padding-top:10px;'>{$_SESSION['NumberE']}</div>";
            $_SESSION['NumberE'] = null ;
            return $output;
        }
    } 
    function ErrorText(){
        if (isset($_SESSION['TextE'])){
            $output = "<div style = 'background:#F3B3A6; width:80%; margin:auto; height:36px; margin-bottom:10px; border-radius:8px; font-size:16px; padding-top:10px;'>{$_SESSION['TextE']}</div>";
            $_SESSION['TextE'] = null ;
            return $output;
        }
    }

    function Success(){
        if (isset($_SESSION['SuccessMessage'])){
            $output = "<div style = 'background:#B3F2DD; width:80%; margin:auto; height:40px; margin-bottom:10px; border-radius:8px; font-size:16px; padding-top:10px; text-align:center; font-weight:bolder; width:80%; margin-top:10px'>{$_SESSION['SuccessMessage']}</div>";
            $_SESSION['SuccessMessage'] = null ;
            return $output;
        }
    }

    function User(){
        if (isset($_SESSION['User_id'])){
            $output =$_SESSION['User_id'];
            // $_SESSION ['User_id'] = null ;
            return $output ;
        }
    }

    function Admin(){
        if (isset($_SESSION['Admin_id'])){
            $output = $_SESSION['Admin_id'];
            return $output;
        }
    }
    

    
?>

<!-- Now When the Function is called more than once it would not work because the $_SESSION['ErrorMessage'] has been set to Null so the condition that has been set in the function would not work  So this explains why i can not use Just One Session to Control everything
Session work as far as the Browser is still on 
--> 
