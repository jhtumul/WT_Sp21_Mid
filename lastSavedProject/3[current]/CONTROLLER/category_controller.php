<?php
    $category="";
    $err_category="";
    $has_error=false;

    if(isset($_POST["add_category"]) || isset($_POST["edit_category"]))
    {
        if(empty($_POST["category_name"]))
        {
            $err_category="**enter category**";
            $has_error=true;
        }
        else
        {
            $category=$_POST["category"];
        }
    }
?>