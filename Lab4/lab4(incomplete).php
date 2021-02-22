<?php 
    $name="";
    $err_name="";
    $uname="";
    $err_name="";
    $pass="";
    $err_pass="";
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
    $day="";
    $err_day="";
    $month="";
    $err_month="";
    $year="";
    $err_year="";
    $gender="";
    $err_gender="";
    $suggestions="";
    $err_suggestions="";
    $bio="";
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
		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Password should not contain white space]";
		 }
		 elseif()
		 {
			 $pass=$_POST["pass"];
		 }
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[Please select a gender]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 if(!isset($_POST["suggestions"]))
		 {
			 $err_suggestions="[At least one option must be selected]";
		 }
		 if(!isset($_POST["suggestion"]))
		 {
			 $err_suggestions="[This field can not be skipped]";
		 }
		 else
		 {
			 $suggestions=htmlspecialchars($_POST["suggestion"]);
		 }
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[Bio Required]";
		 }
		 else
		 {
			 $bio=$_POST["bio"];
		 
         }
         if(isset($_POST["submit"]))
         {
            echo "Username: ".$_POST["uname"]."<br>";
            echo "Password: ".$_POST["pass"]."<br>";
            echo "Gender: ".$_POST["gender"]."<br>";
            echo "Profession: ".$_POST["profession"]."<br>";
            echo "Biography: ".$_POST["bio"]."<br>";
            echo "Date: ".$_POST["date"]."<br>";
            echo "E-Mail: ".$_POST["email"]."<br>";
            //echo "Salary: ".$_POST["salary"]."<br>";
            $var = $_POST["Hobbies"];
            echo "Hobbies: ";
            count($var);
            for($i=0;$i<count($var);$i++)
            {
                echo $var[$i].", ";
            }
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
                    <td>:<input type="text" name="name" value="<?php echo $name;?>" placeholder="name"></td>
                </tr>
                <tr>
                    <td><span><b>Username</b></span></td>
                    <td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder="username"></td>
                </tr>
                <tr>
                    <td><span><b>Password</b></span></td>
                    <td>:<input type="password" name="pass" value="<?php echo $pass;?>" placeholder="password"></td>
                </tr>
                <tr>
                <td><span><b>Confirm Password</b></span></td>
                    <td>:<input type="password" name="pass" value="<?php echo $pass;?>" placeholder="confirm password"></td>
                </tr>
                <tr>
                    <td><span><b>Email</b></span>
                    <td>:<input type="text" name="email" value="<?php echo $email;?>" placeholder="email"></td></td>
                </tr>
                <tr>
                    <td><span><b>Phone</b></span>
                    <td>:<input type="text" name="code" size="5" value="<?php echo $code;?>" placeholder="code">-<input type="text" name="phone" size="13" value="<?php echo $phn;?>" placeholder="Number"></td></td>
                </tr>
                <tr>
                    <td><span><b>Address</b></span></td>
                    <td>:<input type="text" name="street" value="<?php echo $street;?>" placeholder="Street Address"><br>
                    :<input type="text" name="city" size="9" value="<?php echo $city?>" placeholder="City">-<input type="text" name="state" size="9" value="<?php echo $state?>" placeholder="State"><br>
                    :<input type="text" name="postal_code" value="<?php echo $postal_code?>" placeholder="Postal/Zip code"></td>
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
                    </td>
                </tr>
                <tr>
                    <td><span><b>Gender</b></span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
                    <input type="radio" name="gender" value="Female"><span>Female</span></td>
                </tr>
                <tr>
					<td><span><b>Where did you <br>
                    hear about us?</b></span></td>
					<td><input type="checkbox" name="suggestions[]" value="Movies"><span>A Friend or Colleague</span><br>
					    <input type="checkbox" name="suggestions[]" value="Music"><span>Google</span><br>
						<input type="checkbox" name="suggestions[]" value="Games"><span>Blog Post</span><br>
						<input type="checkbox" name="suggestions[]" value="Sports"><span>News Article</span>
						<span><?php echo "&nbsp  ".$err_suggestions;?></span></td>
				</tr>
                <tr>
	 				<td><span><b>Bio</b></span></td>
					 <td>:<textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "&nbsp".$err_bio;?></span></td>
				</tr>
            </table>
            <br>
			<input type="submit" name="submit" value="Register">
        </form>
        </fieldset>
    </body>
</html>