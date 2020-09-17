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
$dId="";
$dFname="";
$dLname="";
$daddress="";
$dDOB="";
$demail="";
$dmob_no="";
if(isset($_GET['updid'])){
    $updid=$_GET['updid'];
    $s="select * from reg_db where Id='$updid'";
    if($r=mysqli_query($con,$s))
    {
        $row=mysqli_fetch_assoc($r);
        $dId=$row['Id'];
        $dFname=$row['Fname'];
        $dLname=$row['Lname'];
        $daddress=$row['address'];
        $dDOB=$row['DOB'];
        $demail=$row['email'];
        $dmob_no=$row['mob_no'];
    }
    
}


if(isset($_POST['update'])){
     $i=$_GET['updid'];
     $aa=$_POST['uFname'];
     $bb=$_POST['uLname'];
     $cc=$_POST['uaddress'];
     $dd=$_POST['uDOB'];
     $ee=$_POST['uemail'];
     $ff=$_POST['umob_no'];
     $up_sql="UPDATE reg_db SET $col1='$aa',$col2='$bb',$col3='$cc',$col4='$dd',$col5='$ee',$col6='$ff' where Id='$i' ";
     $result=mysqli_query($con,$up_sql);
     if($result==true){
        echo "<script> 
        alert('Updated Succesfully');
        window.location.href='display11.php';
       </script>";
   
 }
}


?>
<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style11.css">
</head>
<body>
    <div class="container">
    <form action="" method="post">
    <table class="table">
            <thead>
                <th colspan="2" class="thead">Updation</th>
            </thead>
            <tbody>
                <tr>
                    <td><label for="Id">Id:</label></td>
                    <td><?php echo $dId; ?><br></td>
                </tr>
                <tr>
                    <td><label for="name">FName:</label></td>
                    <td><input type="text" name="uFname" placeholder="Enter your First name" required value="<?php echo $dFname; ?>" onkeypress="return isCharKey(event)"/></td>
                </tr>
                <tr>
                    <td><label for="name">LName:</label></td>
                    <td><input type="text" name="uLname" placeholder="Enter your Last name" required value="<?php echo $dLname; ?>" onkeypress="return isCharKey(event)"/></td>
                </tr>
                <tr>
                    <td><label for="name">Address:</label></td>
                    <td><input type="text" name="uaddress" placeholder="Enter your Address" required value="<?php echo $daddress; ?>" onkeypress="return isCharKey(event)"/></td>
                </tr>
                <tr>
                    <td><label for="name">Date of Birth:</label></td>
                    <td><input type="date" name="uDOB" placeholder="Enter your Date Of Birth" required value="<?php echo $dDOB; ?>" onkeypress="return isCharKey(event)"/></td>
                </tr>
                <tr>
                    <td><label for="name">Email:</label></td>
                    <td><input type="email" name="uemail" placeholder="Enter email" required value="<?php echo $demail; ?>" /></td>
                </tr>
                <tr>
                    <td><label for="name">Mob_no.:</label></td>
                    <td><input type="tel" name="umob_no" placeholder="Enter mobile no" required maxlength="10" value="<?php echo $dmob_no; ?>" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="update" class="button-save" value="Update" />
                    </td>
                </tr>
            </tbody>
                
    </form>
    </div>
</body>
</html>

    

    
