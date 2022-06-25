<?php

$conn=mysqli_connect("localhost:3308", "root", "", "hms");
if (!$conn) {
    die("Database Connect Error");
}
$name=$_POST['name'];
$dob=$_POST['dob'];
$mail=$_POST['mail'];
$docid=$_POST['docid'];
$joindate=$_POST['joindate'];
$address=$_POST['address'];
$phno=$_POST['phno'];
$qualification=$_POST['qualification'];
$department=$_POST['department'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$rpass=$_POST['repass'];
if(empty($name))
{
   echo"<script type='text/javascript'>window.alert('Please enter your name. This field cannot be empty ');window.location='SignUpAsDoctor.html';</script>";
}
if(empty($dob))
{
   echo"<script type='text/javascript'>window.alert('Please enter you date of birth. This field cannot be empty ');window.location='SignUpAsDoctor.html';</script>";
}
if(empty($mail))
{
   echo"<script type='text/javascript'>window.alert('Please enter valid email. This field cannot be empty ');window.location='SignUpAsDoctor.html';</script>";
}
else
{
    
   if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
   {
    echo"<script type='text/javascript'>window.alert('Invalid Email.Please enter valid email.');window.location='SignUpAsDoctor.html';</script>";
  }
}
if(empty($docid))
{
   echo"<script type='text/javascript'>window.alert('Please enter valid email. This field cannot be empty ');window.location='SignUpAsDoctor.html';</script>";
}
else
{
    echo"<script type='text/javascript'>window.alert('Id length between should be between 7-10');window.location='SignUpAsDoctor.html';</script>";
}
if(empty($address))
{
   echo"<script type='text/javascript'>window.alert('Please enter your address. This field cannot be empty ');window.location='SignUpAsDoctor.html';</script>";
}
if(empty($phno))
{
   echo"<script type='text/javascript'>window.alert('Please enter your phone no. This field cannot be empty ');window.location='SignUpAsDoctor.html';</script>";
}
else
{
    if(!preg_match('/^[0-9]{10}+$/', $phno)) {
        echo"<script type='text/javascript'>window.alert('Please enter valid phone ');window.location='SignUpAsDoctor.html';</script>";
        } 
}
if(empty($qualification))
{
   echo"<script type='text/javascript'>window.alert('Please enter your qualification. This field cannot be empty ');window.location='SignUpAsDoctor.html';</script>";
}
if(empty($department))
{
   echo"<script type='text/javascript'>window.alert('Please enter your department. This field cannot be empty ');window.location='SignUpAsDoctor.html';</script>";
}
if(empty($uname))
{
   echo"<script type='text/javascript'>window.alert('Please enter username. This field cannot be empty ');window.location='SignUpAsDoctor.html';</script>";
}
else
{
    if(!preg_match('/^\w{5,}$/', $uname))
    {
        echo"<script type='text/javascript'>window.alert('Invalid Username.Please enter valid username.');window.location='SignUpAsDoctor.html';</script>";
    }
}
// $role=$_POST['n1'];

if(!empty($pass)&& $pass==$rpass) {
    $sql="INSERT INTO doctors (name,dob,mail,docid,address,phno,JoinedDate,qualification,department,uname,pass) VALUES ('$name','$dob','$mail','$docid','$address','$phno','$joindate','$qualification','$department','$uname','$pass')";

    if (mysqli_query($conn, $sql)) {
        echo"<script type='text/javascript'>window.alert('successfully completed');window.location='/Hospital-Management-System/index.html';</script>";
    } else {
        echo"<script type='text/javascript'>window.alert('Something went wrong,Please Try again after some time');window.location='/Hospital-Management-System/signup/SignUpAsDoctor.html';</script>";
    }
} else {
    echo"<script type='text/javascript'>window.alert('Password Does Not Match,Please Try Again');window.location='/Hospital-Management-System/signup/SignUpAsDoctor.html';</script>";
}
mysqli_close($conn);
?>



