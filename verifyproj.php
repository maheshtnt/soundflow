<?php include "db_connectp.php";
$uname1=$_POST['uname'];
$pwd1=$_POST['pword'];
$sql0= "SELECT uname, pwd FROM users WHERE uname like '". $uname1 . "' AND pwd like '". $pwd1 . "'";
$result=$conn->query($sql0);
if ($result->num_rows > 0) {
	echo "Successfully Logged in";
} else {
    echo "Login Unsuccessful";
}
$conn->close();
?>