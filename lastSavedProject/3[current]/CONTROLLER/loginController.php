<?php
    require_once "MODEL/db_config.php";
    $uname="";
    $pass="";
    $err_pass="";
    $err_uname="";
    if(isset($_POST["login"]))
    {
        $uname = htmlspecialchars($_POST["uname"]);
        $pass = htmlspecialchars($_POST["pass"]);
        $query = "select * from users where username='$uname'";
        $result = get($query);
        if(count($result) > 0)
        {
            $user = $result[0];
            if($user["password"] == $pass)
            {
                session_start();
                $_SESSION["user"] = $user["username"];
                $_SESSION["type"] = $user["type"];
                if($_SESSION["type"] == "admin")
                {
                    header("Location: dashboard.php");
                }
                else
                {
                    header("Location: index.php");
                }
            }
            else
            {
                $err_pass = "**password incorrect**";
                
            }
        }
        else
        {
            $uname="";
            $err_pass= "**username does not match!**";
        }
    }
?>