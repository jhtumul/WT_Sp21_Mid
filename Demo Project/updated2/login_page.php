<?php 
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $confirm_pass="";
    $err_confirm_pass="";
    $has_error=false;
    if($_SERVER["REQUEST_METHOD"]=="POST")
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
            if($uname=="admin01")
            {
                header("Location: admin_dashboard.php");
            }
            else
            {
                header("Location: dashboard2(logged_in).php");
            }

        }

    }
?>
<html>
    <head>
        <link rel="stylesheet" href="project.css">
    </head>
    <body>
        <div class=""></div>
        <div class="login-div" align="center">
            <table>
                <tr>
                    <td colspan="2" align="center"><img src="login_icon.jpg" alt="Logo" width="20%"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Login Form</h1></td>
                </tr>
            </table>
            <form action="" method="POST">
                <table align="center">
                    <tr>
                        <td colspan="2"><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username" class="my-font my-textfield">
                        <br><span class="err-msg"><?php echo $err_uname;?></span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password" class="my-font my-textfield">
                        <br><span class="err-msg"><?php echo $err_pass;?></span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Login" class="btn-mine"></td>
                        <td></td>
                    </tr>
                </table>
                <a href="">Forgot Password</a><br>
                <a href="Register.php">Register Here</a>
            </form>
        </div>
    </body>
    <div class="footer"></div>
</html>

        