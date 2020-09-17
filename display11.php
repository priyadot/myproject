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
<button class="button" onclick="window.location.href='index11.html'">Home</button><br>
<table class="table">

    <thead class="thead">
        <th>Id</th>
        <th>FName</th>
        <th>LName</th>
        <th>Address</th>
        <th>DOB</th>
        <th>Email</th>
        <th>mob_no</th>
        <th colspan="2">Actions</th>
    </thead >
    <tbody>
        <?php
            $con=mysqli_connect("localhost","root","","rform_db");
            $sq="select * from reg_db";
            
                $result=mysqli_query($con,$sq);
                if($result==true)
                {
                    while($row=mysqli_fetch_array($result))
                {
                    
                    $id=$row[0];
                    $a=$row[1];
                    $b=$row[2];
                    $c=$row[3];
                    $d=$row[4];
                    $e=$row[5];
                    $f=$row[6];
            
                    echo "<tr>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$a."</td>";
                    echo "<td>".$b."</td>";
                    echo "<td>".$c."</td>";
                    echo "<td>".$d."</td>";
                    echo "<td>".$e."</td>";
                    echo "<td>".$f."</td>";
                    echo "<td><a href='update11.php?updid=$id'>Edit</a></td>";
                    echo "<td><a 
                                href='?delid=$id'
                                onClick=\"javascript: return confirm('Are you sure you want to delete ?')\"
                                >Delete</a></td>";
                    echo "</tr>";
                }
            }

            if(isset($_GET['delid'])){
                $delete_Id=$_GET['delid'];
                $sq="delete from reg_db where Id='$delete_Id'";
                $result=mysqli_query($con,$sq);
                if($result==true){
                    echo "<script> 
                                    alert('Data Deleted Succesfully');
                                    window.location.href='display11.php';
                        </script>";
                    
                }
                else
                {
                    echo "Error".mysqli_error($con);
                }
            }
        
       
        ?>
    </tbody>
</table>
</div>
</body>
</html>