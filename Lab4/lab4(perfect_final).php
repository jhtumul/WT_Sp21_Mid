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
    $code="";
    $err_code="";
    $number="";
    $err_number="";
    $street="";
    $err_street="";
    $city="";
    $err_city="";
    $state="";
    $err_state="";
    $post_code="";
    $err_post_code="";
    $err_day="";
    $err_month="";
    $err_year="";
    $err_gender="";
    $err_suggestions="";
    $err_bio="";
    if(isset($_POST["submit"]))
	 {
         if(empty($_POST["name"]))
         {
             $err_name="[Name Requires]";
         }
         else
         {
             $name=htmlspecialchars($_POST["name"]);
         }
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[Username Required]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[Username should not contain white space]";
		 }
		 else
		 {
			 $uname=htmlspecialchars($_POST["uname"]);
		 }
		 if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
         elseif(strlen($_POST["pass"])<8)
         {
             $err_pass="[password must be at least 8 characters long]";
         }
		 elseif(strpos($_POST["pass"]," "))
		{
			 $err_pass="[Password should not contain white space]";
		}
        elseif(!strpos($_POST["pass"],"#") && !strpos($_POST["pass"],"?"))
		{
			 $err_pass="[Password should contain at least one special character]";
		}
		else
		{
            //
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
                }
                else
                {
                    $err_confirm_pass="[pasword does not match]";
                }
            }
		}
        if(empty($_POST["email"]))
        {
            $err_email="[email required]";
        }
        elseif(!strpos($_POST["email"],"@"))
        {
            $err_email="[email must contain '@' sign]";
        }
        else
        {
            $pos_at  = strpos($_POST["email"],"@");
            if(!strpos($_POST["email"],".",$pos_at))
            {
                $err_email="[at least one dot needed after '@' sign]";
            }
            else
            {
                $email=htmlspecialchars($_POST["email"]);
            }
             
         }
         if(empty($_POST["code"]))
         {
             $err_code="[Code Requires]";
         }
         elseif(!is_numeric($_POST["code"]))
         {
             $err_code="[Code should only contain neumeric value]";
         }
         else
         {
             $code=htmlspecialchars($_POST["code"]);
         }
         if(empty($_POST["phone"]))
         {
             $err_number="[Number Requires]";
         }
         elseif(!is_numeric($_POST["phone"]))
         {
             $err_number="[number should only contain neumeric value]";
         }
         else
         {
             $number=htmlspecialchars($_POST["phone"]);
         }
         if(empty($_POST["street"]))
         {
             $err_street="[street name Requires]";
         }
         else
         {
             $street=htmlspecialchars($_POST["street"]);
         }
         if(empty($_POST["city"]))
         {
             $err_city="[city name Requires]";
         }
         else
         {
             $city=htmlspecialchars($_POST["city"]);
         }
         if(empty($_POST["state"]))
         {
             $err_state="[State name Requires]";
         }
         else
         {
             $state=htmlspecialchars($_POST["state"]);
         }
         if(empty($_POST["postal_code"]))
         {
             $err_post_code="[Postal Code Requires]";
         }
         else
         {
             $post_code=htmlspecialchars($_POST["postal_code"]);
         }
         if(!isset($_POST["day"]))
		 {
			 $err_day="[please select a day]";
		 }
         if(!isset($_POST["month"]))
		 {
			 $err_month="[Please select a month]";
		 }
         if(!isset($_POST["year"]))
		 {
			 $err_year="[Please select a year]";
		 }
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[Please select a gender]";
		 }
		 if(!isset($_POST["suggestions"]))
		 {
			 $err_suggestions="[At least one option must be selected]";
		 }
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[Bio Required]";
		 }
		 else
		 {
			 $bio=htmlspecialchars($_POST["bio"]);
		 
         }
	 }
?>
<html>
    <body align="center">
        <fieldset style="width:0px" align="center">
        <legend align="center">Club Member Registration</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td><span><b>Name</b></span></td>
                    <td>:<input type="text" name="name" value="<?php echo $name;?>" placeholder="name">
                    <?php echo $err_name;?></td>
                </tr>
                <tr>
                    <td><span><b>Username</b></span></td>
                    <td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="username">
                    <?php echo $err_uname;?></td>
                </tr>
                <tr>
                    <td><span><b>Password</b></span></td>
                    <td>:<input type="password" name="pass" value="<?php echo $pass;?>" placeholder="password">
                    <?php echo $err_pass;?></td>
                </tr>
                <tr>
                <td><span><b>Confirm Password</b></span></td>
                    <td>:<input type="password" name="confirm pass" value="<?php echo $confirm_pass;?>" placeholder="confirm password">
                    <?php echo $err_confirm_pass;?></td>
                </tr>
                <tr>
                    <td><span><b>Email</b></span>
                    <td>:<input type="text" name="email" value="<?php echo $email;?>" placeholder="email">
                    <?php echo $err_email;?></td>
                </tr>
                <tr>
                    <td><span><b>Phone</b></span>
                    <td>:<input type="text" name="code" size="5" value="<?php echo $code;?>" placeholder="code">-<input type="text" name="phone" size="12" value="<?php echo $number;?>" placeholder="Number">
                    <?php echo $err_code; echo $err_number;?></td>
                </tr>
                <tr>
                    <td><span><b>Address</b></span></td>
                    <td>:<input type="text" name="street" value="<?php echo $street;?>" placeholder="Street Address"><?php echo $err_street;?><br>
                    :<input type="text" name="city" size="9" value="<?php echo $city;?>" placeholder="City">-<input type="text" name="state" size="8" value="<?php echo $state;?>" placeholder="State"><?php echo $err_city; echo $err_state;?><br>
                    :<input type="text" name="postal_code" value="<?php echo $post_code;?>" placeholder="Postal/Zip code"><?php echo $err_post_code;?></td>
                </tr>
                <tr>
                    <td><span><b>Birth Date</b></span></td>
                    <td>:
                        <select name="day">
                            <option disabled selected>Day</option>
                            <?php 
                                for($i=1;$i<=31;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <select name="month">
                            <option disabled selected>Month</option>
                            <?php 
                                $months=array("Jan"=>"1", "Feb"=>"2", "Mar"=>"3", "Apr"=>"4", "May"=>"5", "June"=>"6","Jul"=>"7", "Aug"=>"8", "Sep"=>"9", "Oct"=>"10", "Nov"=>"11", "Dec"=>"12");
                                foreach($months as $x => $x_value) {
                                    echo "<option>$x($x_value)<option>";
                                    
                                  }
                            ?>
                        </select>
                        <select name="year">
                        <option disabled selected>Year</option>
                        <?php 
                                for($i=1985;$i<=2021;$i++)
                                {
                                    echo "<option>$i<option>";
                                }
                            ?>
                        </select>
                        <?php echo $err_day;
                        echo $err_month;
                        echo $err_year;?>
                    </td>
                </tr>
                <tr>
                    <td><span><b>Gender</b></span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
                    <input type="radio" name="gender" value="Female"><span>Female</span>
                    <?php echo $err_gender;?></td>
                </tr>
                <tr>
					<td><span><b>Where did you <br>
                    hear about us?</b></span></td>
					<td><input type="checkbox" name="suggestions[]" value="Movies"><span>A Friend or Colleague</span><br>
					    <input type="checkbox" name="suggestions[]" value="Music"><span>Google</span><br>
						<input type="checkbox" name="suggestions[]" value="Games"><span>Blog Post</span><br>
						<input type="checkbox" name="suggestions[]" value="Sports"><span>News Article</span>
                        <?php echo $err_suggestions;?></td>
				</tr>
                <tr>
	 				<td><span><b>Bio</b></span></td>
					 <td>:<textarea name="bio" value="<?php echo $bio;?>"></textarea>
                     <?php echo $err_bio;?></td>
				</tr>
            </table>
            <br>
			<input type="submit" name="submit" value="Register">
        </form>
        </fieldset>
    </body>
</html>