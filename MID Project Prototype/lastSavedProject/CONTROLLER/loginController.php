<?php 
    session_start();
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $confirm_pass="";
    $err_confirm_pass="";
    $has_error=false;
    if($_POST["login"])
    {
        if(empty($_POST["uname"]))
        {
            $err_uname="Username Required";
            $has_error=true;
        }
        else
        {
            $uname=htmlspecialchars($_POST["uname"]);
        }
        if(empty($_POST["pass"]))
        {
            $err_pass="Password Required";
            $has_error=true;
        }
        elseif(strlen($_POST["pass"])<8)
        {
            $err_pass="Password must be atleast 8 characters long";
            $has_error=true;
        }
        elseif(strpos($_POST["pass"]," "))
        {
            $err_pass="Password must not contain white spaces";
            $has_error=true;
        }
        elseif(!strpos($_POST["pass"],"@") && !strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"$"))
        {
            $err_pass="Password must contain atleast one special character(@,#,$)";
            $has_error=true;
        }
        else
		{
            $u=0; $l=0; $d=0;
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_upper($_POST["pass"][$i]))
                {
                    $u=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_lower($_POST["pass"][$i]))
                {
                    $l=1;
                    break;
                }
            }
            for($i=0; $i<strlen($_POST["pass"]); $i++)
            {
                if(ctype_digit($_POST["pass"][$i]))
                {
                    $d=1;
                    break;
                }
            }
            if(!$u==1 || !$l==1 || !$d==1)
            {
                $err_pass="[must have at least one upper case, one lower case & one numeric value]";
                $has_error=true;
            }
            else
            {
                $pass=htmlspecialchars($_POST["pass"]);
            }
		}
        if(!$has_error)
        {
            $_SESSION["user"] = $uname;
            $_SESSION["pass"] = $pass;
            //setcookie("user",$uname,time()+120,"/");
            header("Location: homepage(common).php");
        }

    }
?>