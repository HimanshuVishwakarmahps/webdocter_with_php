<?php
session_start();
?>

<html> 
<head>
      <title>display record</title>
    <style>
        body
        {
          background:#d071f9;
        }
        table{
            background: white;
        }
        .Update{
            height:20px;
            width:50%;
            backgroud-image:red;
        }
        td,a {
            background:aqua;
           
        }
       
        tr{
            height:2rem;
            font-size:1.3rem;
        }
        th{
            background:#ff0ca78a;
        }
        a{
            border:1px solid black;
            color:white;
            width: 40%;
            padding:0px 27.5px 0px 27.5px;
            border-radius:2px;
            background:green;
            
            
        }
        h2>mark{
            
     
            border:3xp solid black ;

        }

     </style>  
 </head>     
<?php
include("db_conect.php");
error_reporting(0);#this use for not show wrning on the displa


if (!isset($_SESSION['user_name'])) 
{
   header('location:login.php');
}
// $userprofile=$_SESSION['user_name'];

// if($userprofile =='true'){

// }else{
//     header('location:login.php');
// }

$query= "SELECT * FROM form";
#form is table name 
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
#this function use for array base print data 
 



if ($total != 0) 
{
    ?>

    <h2 align="center"><mark>All records of pataint appointment<mark><h2>
    <center> 
    <table border=3 cellspacing="7" width="100%">
        <tr>
        
        <th width="8%">Fist Name</<th>
        <th width="8%">last Name</<th>
        <th width="8%">Gender</<th>
        <th width="15%">Email</<th>
        <th width="10%">phone</<th>
        <th width="25%">Address</<th>
        <!-- <th width="22%">Opretions</<th> -->
        </tr>   
    <?php
    
    while ($result= mysqli_fetch_assoc($data))
    {
   
    echo" 
    <tr>
      
       <td>"."$result[firstName]"."</<td>
       <td>"."$result[lastName]"."</<td>
       <td>"."$result[gender]"."</<td>
       <td>"."$result[email]"."</<td>
       <td>"."$result[phone]"."</<td>
       <td>"."$result[Address]"."</<td>
    
       

    </tr>
    ";
   
       
    }
    
}
else 
{
    echo" no record ";
}

?>
<center>
     </table>



