<?php

include ('connect.php');

if(isset($_POST['save']))
{
    $sql ="INSERT INTO reception(name,date,new_reg,cash_bf,day_collection,expense,total_balance,balance_bf)
    VALUE (
    '".$_POST["name"]."',
    '".$_POST["date"]."',
    '".$_POST["new_reg"]."',
    '".$_POST["cash_bf"]."',
    '".$_POST["day_collection"]."',
    '".$_POST["expense"]."',
    '".$_POST["total_balance"]."',
    '".$_POST["balance_bf"]."')";

    $result = mysqli_query($conn,$sql);
    if($result){
      echo "saved";
    } else{
      echo "not saved";
    }

};

?>