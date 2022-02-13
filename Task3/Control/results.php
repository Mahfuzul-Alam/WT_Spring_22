<?php
if(isset($_POST["Submit"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $pass=$_POST["pass"];
    $email=$_POST["email"];

if(isset($_POST["Submit"]))

{
    $fname= $_POST["fname"];
    if ($fname=="")
    {
        echo "enter a valid name";
    }
    else
    {
        echo "First name is: ".$fname;
    }
    
    $lname= $_POST["lname"];
    echo "<br>";
    if ($lname=="")
    {
        echo "enter a valid name";
    }
    else
    {
        echo "Last Name is: ".$lname;
    }
    echo "<br>";
    if(empty($age)){
        echo "Please enter a valid Age";
    }
    else{
        echo "Age: ".$age;
    }
    echo "<br>";
    if(empty($pass)){
        echo "Please enter a password";
    }
    else if(strlen($pass)<8){
        echo "Your password must be 8 or more characters";
    }
    else{
        echo "Your Password is fine";
    }
    echo "<br>";
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    echo "you must enter email";
}
else{
    echo "Email: ".$email;
}
echo "<br>";
    if (isset($_POST["myradio"]))
    {
        echo "He is a ".$_POST["myradio"];
    }
    else
    {
        echo "Please select a Designation ";
    }
    echo "<br>";
    if (isset($_POST["mycheckbox"]))
    {
        echo "Preferred Language ".$_POST["mycheckbox"];
    }
    else
    {
        echo "Please select a Language ";
    }
    echo "<br>";
    
    $extension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);


if($extension=='jpg'){
    if($_FILES['fileToUpload']['size']<2000000){
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], '../Files/'. $_FILES["fileToUpload"]["name"])) {
            echo "Successfully Uploaded";
        } else {
            echo "File not uploaded";
        }
    
    }
    else{
        echo "File size must be less than 2 MB";
    }
}
else{
    echo "Only jpg";
    
}
}
}


?>