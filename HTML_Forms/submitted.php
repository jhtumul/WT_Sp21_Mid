<html>
    <head></head>
    <body>
        <h1>Form Submitted</h1>
        <?php
              echo "Username: ".$_POST["uname"]."<br>";
              echo "Password: ".$_POST["pass"]."<br>";
              echo "Gender: ".$_POST["gender"]."<br>";
              echo "Profession: ".$_POST["profession"]."<br>";
              echo "Biography: ".$_POST["bio"]."<br>";
              echo "Date: ".$_POST["date"]."<br>";
              echo "E-Mail: ".$_POST["email"]."<br>";
              echo "Salary: ".$_POST["salary"]."<br>";
        ?>
    </body>
</html>