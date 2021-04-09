<?php
    require_once "MODEL/db_config.php";
    $name="";
    $err_name="";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $confirm_pass="";
    $err_confirm_pass="";
    $email="";
    $err_email="";
    $number="";
    $err_number="";
    $har_error=false;

    function validatePass($pass)
    {
        $has_upper=false;
        $has_lower=false;
        $has_digit=false;
        for($i=0;$i<strlen($pass);$i++)
        {
            if(ctype_upper($pass[$i]))
            {
                $has_upper=true;
            }
            if(ctype_lower($pass[$i]))
            {
                $has_lower=true;
            }
            if(ctype_digit($pass[$i]))
            {
                $has_digit=true;
            }
        }
        if($has_upper==false || $has_lower==false || $has_digit==false)
        {
            return false;
        }
        elseif(strlen($_POST["pass"])<8)
        {
            return false;
        }
		elseif(strpos($_POST["pass"]," "))
        {
            return false;
        }
        elseif(!strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"?") && !strpos($_POST["pass"],"@"))
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    //Change Password Part
    if(isset($_POST["changePass"]))
    {
        if(empty($_POST["pass"]))
        {
            $err_pass="**password required!**";
            $has_error=true;
        }
        elseif(!validatePass($_POST["pass"]))
        {
            $err_pass="**password must contain atleast 8 characters, 1 upper case, 1 lowercase & 1 special character(@/#) & No whitespaces**";
            $has_error=true;
        }
        else
        {
            $pass=htmlspecialchars($_POST["pass"]);

            $query = "insert into users values(null,'$uname','$pass','user')";
            $result = execute($query);
            echo "value updated into database!";
            header("Location: myAccount.php");
        }
    }

    //Registration && Update Details Part
    if(isset($_POST["register"]) || isset($_POST["updateDetails"]))
	 {
         //Name Validation
         if(empty($_POST["name"]))
         {
             $err_name="[Name Requires]";
             $has_error=true;
         }
         else
         {
             $name=htmlspecialchars($_POST["name"]);
         }

         //User Name Validation
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

         //Password Validation
		 if(empty($_POST["pass"]))
        {
            $err_pass="[password required]";
            $has_error=true;
        }
        elseif(!validatePass($_POST["pass"]))
        {
            $err_pass="**password must contain atleast 8 characters, 1 upper case, 1 lowercase & 1 special character(@/#) & No whitespaces**";
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

        //Email Validation
        if(empty($_POST["email"]))
        {
            $err_email="[Email required]";
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

         //Phone Validation
         if(empty($_POST["phone"]))
         {
             $err_number="[Number Required]";
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

         //
         if(!$has_error)
         {
            session_start();
            if(isset($_POST["register"]))
            {
                $query = "insert into users values(null,'$uname','$pass','user')";
                $result = execute($query);
                echo "value inserted into database!";
                header("Location: login.php");
            }
            elseif(isset($_POST["updateDetails"]))
            {
                $query = "insert into users values(null,'$uname','$pass','user')";
                $result = execute($query);
                echo "value updated into database!";
                header("Location: myAccount.php");
            }
         }
	 }
?>