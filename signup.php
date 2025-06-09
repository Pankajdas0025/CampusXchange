
<?php
$dbcon=new mysqli("localhost","root","","blog");
if($dbcon->connect_error)
{
    echo "Database Connection Failed!";

}
else
{

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $Username=trim(mysqli_real_escape_string($dbcon ,$_POST['UName']));
        $Email=trim(mysqli_real_escape_string($dbcon,$_POST['Email']));
        $Password =trim(mysqli_real_escape_string($dbcon,$_POST['Password']));
       
        $check="SELECT EMAIL FROM USERS WHERE EMAIL='$Email'";
        $response=$dbcon->query($check);
    if($response->num_rows!=0)
        {
            echo "This email is already registred !";
        }
    else
       {
        if(!empty($Username) && !empty($Email) && !empty($Password))
{        
        $Password = trim(password_hash($_POST['Password'], PASSWORD_DEFAULT));//for password we use this security 
        $sql="INSERT INTO USERS
        values
        ('','$Username','$Email','$Password')";
        if($dbcon->query($sql))

        {
            
            echo "You have successfuly signup  go to Login Page !!";
        }
        else
        {
            echo "Failed !";
        }
}    else
       {
       echo "<script>alert('All fields are Requierd for signup !')</script>";
       }
      }

}
else
{
echo "POST METHOD";
}

}

?>
