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
    <form action="submitted.php" method="post">
        <table>
            <tr>
                <td><span><b>Username</b></span></td>
                <td>:<input type="text" name="uname"></td>
            </tr>
            <tr>
                <td><span><b>Password</b></span></td>
                <td>:<input type="password" name="pass"></td>
            </tr>
            <tr>
                <td><span><b>Gender</b></span></td>
                <td>:<input type="radio" name="gender" value="Male">Male
                     <input type="radio" name="gender" value="Female">Female</td>
            </tr>
            <tr>
                <td><span><b>Hobbies</b></span></td>
                <td>:<input type="checkbox">Movies <input type="checkbox">Music <input type="checkbox">Games <input type="checkbox">Sports</td>
            </tr>
            <tr>
                <td><span><b>Profession</b></span></td>
                <td>:<select name="profession">
                    <option disabled selected></option>
                    <option>Teaching</option>
                    <option>Service</option>
                    <option>Business </option>
                    <option>Others</option>
                    </select></td>
            </tr>
            <tr>
                <td><span><b>Bio</b></span></td>
                <td>:<textarea name="bio">Hi, Welcome Here</textarea></td>
            </tr>
            </table> <br>

        <input type="date" name="date">
        <input type="email" name="email">
        <input type="number" name="salary"><br><br>
        <input type="Submit" value="Submit"><br><br>
    </form>
</body>
</html>