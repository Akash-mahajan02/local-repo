<?php 
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $EmailID=$_POST['EmailID'];
    $Pass=$_POST['Pass'];
    $Con_pass=$_POST['Con_pass'];

    $conn =new mysqli('localhost','root','','test');

    if($conn->connect_error)
    {
        die('Connection Failed  :'$conn->connerct_error);
    }
    else
    {
        $stmt=$conn->prepare("Insert into registration(FirstName,LastName,EmailID,Pass,Con_pass)
        valuse(?,?,?,?,?)")
    }

?>