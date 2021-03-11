<?php
    $err_pname="";
    $err_pcategory="";
    $err_pprice="";
    $err_pquantity="";
    $err_pbio="";
    $err_pfilename="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["pname"]))
        {
            $err_pname="Please insert name";
        }
        if(!isset($_POST["pcategory"]))
        {
            $err_pcategory="Please select category";
        }
        if(empty($_POST["pprice"]))
        {
            $err_pprice="Please insert price";
        }
        if(empty($_POST["pquantity"]))
        {
            $err_pquantity="Please insert quantity";
        }
        if(empty($_POST["pbio"]))
        {
            $err_pbio="Please insert description";
        }
        if(empty($_POST["filename"]))
        {
            $err_pfilename="Please insert file";
        }
        
    }
?>
<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="project.css">
    </head>
    <body>
        <div class="header-admin">
            <h1>Admin</h1>
        </div>
        <div class="admin-bar">
            <ul class="plain-bullet">
                <li><a href="admin_dashboard.php">Dashboard</a></li>
                <li><a href="all_products.php">All Product</a></li>
                <li><a href="add_products.php" class="active">Add Product</a></li>
                <li><a href="all_category.php">All Category</a></li>
                <li><a href="add_category.php">Add Category</a></li>
                <li><a href="login_page.php" class="right">Logout</a></li>
            </ul>
        </div>
        <div class="form-area">
            <form action="" method="post">
                <table>
                    <tr>
                        <td><span>Name:</span><br><input type="text" name="pname" placeholder="Enter Product Name">
                        <br><span class="err-msg"><?php echo $err_pname;?></span></td>
                    </tr>
                    <tr>
                        <td name="pcategory"><span>Category:</span><br>
                            <select >
                                <option disabled selected>Select One</option>
                                <option>Laptop</option>
                                <option>ipad</option>
                                <option>Brand PC</option>
                                <option>Mobiles</option>
                                <option>Monitors</option>
                                <option>Ram</option>
                            </select>
                            <br><span class="err-msg"><?php echo $err_pcategory;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Price:</span><br><input type="text" name="pprice" placeholder="Enter Price">
                        <br><span class="err-msg"><?php echo $err_pprice;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Quantity:</span><br><input type="text" name="pquantity" placeholder="Enter Quantity">
                        <br><span class="err-msg"><?php echo $err_pquantity;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Description:</span><br><textarea name="pbio" placeholder="Write Details Here..."></textarea>
                        <br><span class="err-msg"><?php echo $err_pbio;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Image</span><br><input type="file" id="myFile" name="filename">
                        <br><span class="err-msg"><?php echo $err_pfilename;?></span></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Add Product" id="" class="sb1">
            </form>
        </div>
    </body>
</html>