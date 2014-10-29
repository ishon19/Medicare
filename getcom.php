<?php
error_reporting("ERROR");
$connection = mysql_connect("localhost","root","");
$db = mysql_select_db("commdb",$connection);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
       $comment = $_POST['comment'];
    if($comment != '')
    {
        $query = mysql_query("insert into response (comment , time, topic_no) values ('$comment', NOW() ,'1')", $connection);
        echo "<script type='text/javascript'>alert('Response recorded..Thanks!!!');</script>";
       
    }
    
    else { echo "Something Went Wrong :( <br> Please try again!!!"; }
}
 //header("location:Forum.html");
mysql_close($connection);
?>