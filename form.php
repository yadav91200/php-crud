

<?php include ("conection.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: white;
        }
        .contaner{
            border: 2px solid black;
            border-radius: 5px;
            max-width: 600px;
            background-color: aliceblue;
            margin: 20px auto;
            padding: 30px;
        }
        .contaner .title{
            font-size: 25px;
            text-align: center;
            margin-bottom: 20px;
        }
        .contaner .form .input_field label
        {
            margin-right: 20px;
        }
        .contaner .form .input_field .btn{
            width: 100px;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="contaner">
        <div class="title">
            <h2>Registration Form</h2>
        </div>

        <form action="form.php" method="post">

            <div class="input_field">
                <label>firstname</label>
                <input type="text" class="input">
            </div>
                  <br>
            <div class="input_field">
                <label>lastname</label>
                <input type="text" class="input">
            </div>
                  <br>
            <div class="input_field">
                <label>email</label>
                <input type="text" class="input">
            </div>
                  <br>
            <div class="input_field">
                <label>password</label>
                <input type="password" class="input">
            </div>
                  <br>
            <div class="input_field">
                <label>mobile no</label>
                <input type="text" class="input">
            </div>
                  <br>
            <div class="input_field">
                <label>gender</label>
               <select>
                <option>select</option>
                 <option>Male</option>
                  <option>Female</option>
                   <option>Other Traction</option>
               </select>
            </div>
                 <br>
            <div class="input_field"></div>
            <input type="submit" value="submit" class="btn">
             
        </form>

    </div>
</body>
</html>

<?php
if($_POST['submit']);
 {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email= $_POST['email'];
    $pass = $_POST['password'];
    $mob = $_POST['mobile no'];
    $gen =$_POST['gender'];
    
   $query = "inset into boy values ($fname,$lname,$email,$pass,$mob,$gen)";

   $data   = mysqli_query($conn,$query);

   if($data){
    echo "data insert";
   }
   else{
    echo "data failed";
   }
 }
?>




