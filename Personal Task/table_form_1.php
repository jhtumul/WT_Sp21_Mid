<html>
<head></head>
<body>
    <table border="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>CGPA</th>
        </tr>
        <tr>
            <td>15</td>
            <td>Jubair</td>
            <td>3.52</td>
            <td>Extra</td>
        </tr>
        <tr>
            <td rowspan="2" align="center">12</td>
            <td>Tanvir</td>
            <td>3.94</td>
        </tr>
        <tr>
            
            <td>Rahim</td>
            <td>2.50</td>
        </tr>
        <tr>
            <td colspan="3" align="center">Group Specifier</td>
        </tr>
    </table> <br>
    <h1>User Registration</h1><br>
    <form action="submitted_1.php" method="post">
        <span><b>Username</b></span>: <input type="text" name="uname">
        <span><b>Password</b></span>: <input type="password" name="pass"><br><br>
        <span><b>Gender</b></span>: <input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female <br><br>
        <span><b>Hobbies</b></span>: <input type="checkbox">Movies <input type="checkbox">Music <input type="checkbox">Games <input type="checkbox">Sports <br><br>
        <span><b>Profession</b></span>
        <select name="profession">
            <option disabled selected></option>
            <option>Teaching</option>
            <option>Service</option>
            <option>Business </option>
            <option>Others</option>
        </select><br><br>
        <span><b>Bio</b></span>: <textarea name="bio">Hi, Welcome Here</textarea><br><br>
        <input type="date" name="date">
        <input type="email" name="email">
        <input type="number" name="salary"><br><br>
        <input type="Submit" value="Submit"><br><br>
        
        
    </form>



    
</body>
</html>