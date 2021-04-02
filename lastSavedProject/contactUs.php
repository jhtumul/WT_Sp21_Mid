<?php 
    require_once "CONTROLLER/contactUsController.php";
    include_once "header(user).php";
?>

        <div class="main-content">
            <form action="" method="post">
                <table>
                    <tr>
                        <th><h3>Contact Form</h3></th>
                    </tr>
                    <tr>
                        <td><span>Your Name*</span></td>
                        <td><input type="text" name="uname" id="" placeholder="Your Name"><br>
                        <span class="err-msg"><?php echo $err_uname;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Your Email*</span></td>
                        <td><input type="text" name="email" id="" placeholder="Your Email"><br>
                        <span class="err-msg"><?php echo $err_email;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Topic</span></td>
                        <td>
                            <select>
                                <option selected>---Please Select---</option>
                                <option>General Inquiries</option>
                                <option>Pre-sale Inquiries</option>
                                <option>Billing Issues</option>
                                <option>Technical Support</option>
                                <option>Complains</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Message*</span></td>
                        <td><textarea name="message" placeholder="Message"></textarea><br>
                        <span class="err-msg"><?php echo $err_message;?></span></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    <?php include_once "footer.php";?>