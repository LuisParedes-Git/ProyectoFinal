<?php
$db = mysqli_connect('us-cdbr-east-02.cleardb.com
', 'b4962aeb486a6f', '4f44c548', 'heroku_b2cde43a768c1fd');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
