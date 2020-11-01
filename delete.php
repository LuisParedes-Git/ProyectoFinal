
<?php
$db = mysqli_connect('us-cdbr-east-02.cleardb.com', 'b4962aeb486a6f', '', 'heroku_b2cde43a768c1fd');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php

if (isset($_GET['id']))
{

$result = mysqli_query($db,"DELETE FROM product WHERE product_id=".$_GET['id']);
if($result==true)
	echo "sucess";
header("Location:table.php");
}

?>
