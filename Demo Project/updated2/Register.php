<?php 
    $name="";
    $err_name="";
    $uname="";
    $err_name="";
    $pass="";
    $err_pass="";
    $confirm_pass="";
    $err_confirm_pass="";
    $email="";
    $err_email="";
    $number="";
    $err_number="";
    $har_error=false;
    if(isset($_POST["submit"]))
	 {
         if(empty($_POST["name"]))
         {
             $err_name="[Name Requires]";
             $has_error=true;
         }
         else
         {
             $name=htmlspecialchars($_POST["name"]);
         }
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
             $has_error=true;
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
             $has_error=true;
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain white space]";
             $has_error=true;
		 }
		 else
		 {
			 $uname=htmlspecialchars($_POST["uname"]);
		 }
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
             $has_error=true;
		 }
        elseif(strlen($_POST["pass"])<8)
        {
             $err_pass="[password must be at least 8 characters long]";
             $has_error=true;
        }
		elseif(strpos($_POST["pass"]," "))
        {
                $err_pass="[Password should not contain white space]";
                $has_error=true;
        }
        elseif(!strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"?") && !strpos($_POST["pass"],"@"))
        {
                $err_pass="[Password should contain at least one special character]";
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
                if($_POST["pass"]==$_POST["confirm_pass"])
                {
                    $confirm_pass=$_POST["pass"];
                }
                elseif(empty($_POST["confirm_pass"]))
                {
                    $err_confirm_pass="[Please re-insert password]";
                    $has_error=true;
                }
                else
                {
                    $err_confirm_pass="[pasword does not match]";
                    $has_error=true;
                }
            }
		}
        if(empty($_POST["email"]))
        {
            $err_email="[email required]";
            $has_error=true;
        }
        elseif(!strpos($_POST["email"],"@"))
        {
            $err_email="[email must contain '@' sign]";
            $has_error=true;
        }
        else
        {
            $pos_at  = strpos($_POST["email"],"@");
            if(!strpos($_POST["email"],".",$pos_at))
            {
                $err_email="[at least one dot needed after '@' sign]";
                $has_error=true;
            }
            else
            {
                $email=htmlspecialchars($_POST["email"]);
            }
             
         }
         if(empty($_POST["phone"]))
         {
             $err_number="[Number Requires]";
             $has_error=true;
         }
         elseif(!is_numeric($_POST["phone"]))
         {
             $err_number="[number should only contain neumeric value]";
             $has_error=true;
         }
         else
         {
             $number=htmlspecialchars($_POST["phone"]);
         }
         if(!$has_error)
         {
             header("Location: login_page.php");
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
                    <td colspan="2" align="center"><h1 style="font-family: cambria; font-size: 20px">Registration Form</h1></td>
                </tr>
            </table>
            <form action="" method="POST">
            <table align="center">
                <tr>
                    <td colspan="2"><input type="text" name="name" value="<?php echo $name;?>" placeholder="Enter Name" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_name;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Enter Username" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_uname;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Enter Password" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_pass;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="confirm_pass" value="<?php echo $confirm_pass;?>" placeholder="Confirm Password" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_confirm_pass;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="email" value="<?php echo $email;?>" placeholder="Enter Email" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_email;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="phone" value="<?php echo $number;?>" placeholder="Enter Phone Number" class="my-font my-textfield">
                    <br><span class="err-msg"><?php echo $err_number;?></span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" id="" value="Register" class="btn-mine"></td>
                    <td></td>
                </tr>
            </table>
            </form>
        </div>
    </body>
    <div class="footer"></div>
</html>

        