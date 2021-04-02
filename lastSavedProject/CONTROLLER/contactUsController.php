<?php
    //this is start
    $uname="";
    $err_uname="";
    $message="";
    $err_message="";
    $email="";
    $err_email="";
    $has_error=false;
    function validateEmail($email)
    {
        if(!strpos($email,"@"))
        {
            return false;
        }
        else
        {
            $pos_at = strpos($email,"@");
            if(!strpos($email,".",$pos_at))
            {
                return false;
            }
            else
            {
                return true;
            }
        }
    }


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["uname"]))
        {
            $err_uname="Please Enter Name";
        }
        if(empty($_POST["email"]))
        {
            $err_email="email required";
            $has_error=true;
        }
        elseif(!validateEmail($_POST["email"]))
        {
            $err_email="Not a valid email";
            $has_error=true;
        }

        if(empty($_POST["message"]))
        {
            $err_message="Please fill up message box";
            $has_error=true;
        }    
        if(!$has_error)
        {
            //header("Location: dash2.php");
        }
    }
?>