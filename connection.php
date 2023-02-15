<?php

$target="rgistration.html";
$linkname="mylink";
link($target, $linkname);

$name=$_POST['Name'];
$DOB=$_POST['DOB'];
$gender=$_POST['gender'];
$aadhar=$_POST['aadhar'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$type=$_POST['type'];
$bloodgroup=$_POST['bloodgroup'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$profession=$_POST['profession'];
$nomineename=$_POST['nomineename'];
$nomineemail=$_POST['nomineemail'];
$mob=$_POST['mob'];

//database connection

$conn = new mysqli('localhost','root','','test');
if($conn->connection_error)
{
    die('connection failed : '.$conn->connection_error);
}
else{
    $stmt=$conn->prepare("insert into registration(Name,DOB,gender,aadhar,mobile,email,type,bloodgroup,address,city,state,pincode,profession,nomineename,nomineemail,mob) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sisiissssssisssi",$Name,$DOB,$gender,$aadhar,$mobile,$email,$type,$bloodgroup,$address,$city,$state,$pincode,$profession,$nomineename,$nomineemail,$mob);
    $stmt->execute();
    echo"registration successfull. . . .  ";
    $stmt->close();
    $conn->close();

}

?>