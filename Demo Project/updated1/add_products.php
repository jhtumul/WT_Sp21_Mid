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
            <form action="">
                <table>
                    <tr>
                        <td><span>Name:</span><br><input type="text" name="uname" placeholder="Enter Product Name"></td>
                    </tr>
                    <tr>
                        <td><span>Category:</span><br>
                            <select >
                                <option disabled selected>Select One</option>
                                <option>Laptop</option>
                                <option>ipad</option>
                                <option>Brand PC</option>
                                <option>Mobiles</option>
                                <option>Monitors</option>
                                <option>Ram</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Price:</span><br><input type="text" name="price" placeholder="Enter Price"></td>
                    </tr>
                    <tr>
                        <td><span>Quantity:</span><br><input type="text" name="quantity" placeholder="Enter Quantity"></td>
                    </tr>
                    <tr>
                        <td><span>Description:</span><br><textarea name="bio" placeholder="Write Details Here..."></textarea></td>
                    </tr>
                    <tr>
                        <td><span>Image</span><br><input type="file" id="myFile" name="filename"></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Add Product" id="" class="sb1">
            </form>
        </div>
    </body>
</html>