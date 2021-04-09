<?php
    session_start();
    if(!isset($_SESSION["user"]))
    {
        header("Location: login.php");
    }
    require_once "CONTROLLER/affiliateController.php";
    include_once "header(user).php";
?>
        <div class="main-content">
            <form action="" method="post" class="sb-form">
                <table>
                    <tr>
                        <th><h3>My Affiliate Account</h3></th>
                    </tr>
                    <tr>
                        <td><span>Company</span></td>
                        <td><input type="text" name="company" placeholder="Company"><br>
                        <span class="err-msg"><?php echo $err_company;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Web Site</span></td>
                        <td><input type="text" name="website" placeholder="Web Site"><br>
                        <span class="err-msg"><?php echo $err_website;?></span></td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <th><h3>Payment Information</h3></th>
                    </tr>
                    <tr>
                        <td><span>Tax ID</span></td>
                        <td><input type="text" name="tax_id" placeholder="Tax ID"><br>
                        <span class="err-msg"><?php echo $err_tax_id;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Payment Method</span></td>
                        <td><input type="radio" name="pay_method" value="Cheque" checked>Cheque <br>
                        <input type="radio" name="pay_method" value="PayPal">PayPal <br>
                        <input type="radio" name="pay_method" value="Bank Transfer">Bank Transfer <br>
                        <input type="radio" name="pay_method" value="bKash">bKash</td>
                    </tr>
                    <tr>
                        <td><span>Cheque Payee Name</span></td>
                        <td><input type="text" name="payee" placeholder="Cheque Payee Name"><br>
                        <span class="err-msg"><?php echo $err_payee;?></span></td>
                    </tr>
                </table>
                <span>I have read and agree to <a href="#">Terms & Condition<input type="checkbox" name="condition" value="condition checked"></a></span><input type="submit" name="submitAffiliate" value="CONTINUE">
            </form>
        </div>
<?php include_once "footer.php";?>