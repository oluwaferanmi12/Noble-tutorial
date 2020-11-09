<?php
    session_start();
    function message(){
        if (isset($_SESSION['ErrorMessage'])){
            $output = "<div style = 'background:#F3B3A6; width:80%; margin:auto; height:36px; margin-bottom:10px; border-radius:8px; font-size:16px; padding-top:10px;'>{$_SESSION['ErrorMessage']}</div>";
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


    
?>

<!-- Now When the Function is called more than once it would not work because the $_SESSION['ErrorMessage'] has been set to Null so the condition that has been set in the function would not work  So this explains why i can not use Just One Session to Control everything
Session work as far as the Browser is still on 
--> 
