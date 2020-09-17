<?php
$db_name='rform_db';
$table_name='reg_db';
$col1='Fname';
$col2='Lname';
$col3='address';
$col4='DOB';
$col5='email';
$col6='mob_no';
$con=mysqli_connect("localhost","root","",$db_name);

if(isset($_POST['save']))
{
    $a=$_POST['iFname'];
    $b=$_POST['iLname'];
    $c=$_POST['iaddress'];
    $d=$_POST['iDOB'];
    $e=$_POST['iemail'];
    $f=$_POST['imob_no'];
    $sql="INSERT INTO reg_db($col1,$col2,$col3,$col4,$col5,$col6) VALUES ('$a','$b','$c','$d','$e','$f')";
    $result=mysqli_query($con,$sql) or die(mysqli_error($con));
    if($result > 0)
    {
        echo "<script> 
                        alert('Data Saved Succesfully');
                        window.location.href='display11.php';
            </script>";
    }
    else
    {
        echo "Error".mysqli_error($con);
    }
}
?>

