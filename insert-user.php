<?php
    include 'connect.php';

    $cart_number=$_POST["cart_number"];
    $status_user=$_POST["status_user"];
    $code_number=$_POST["code_number"];
    $full_name=$_POST["full_name"];
    $tel=$_POST["tel"];
    $username=$_POST["username"];
    $password=$_POST["password"];

    // echo $password.$username.$cart_number.$status_user.$code_number.$full_name.$tel;*/

    $Sql_insert = "INSERT INTO `table_user`(`card_number`, `code_number`, `full_name`, `tel`, `username`, `password`, `status_user`) 
    VALUES ('$cart_number','$code_number','$full_name','$tel','$username','$password','$status_user')";
    $Obj_insert = mysqli_query($conn , $Sql_insert);

    if($Obj_insert != 0 ){
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>สมัครสมาชิกเรียบร้อย</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            </head>
            <body>
            <div class="col-lg-12">
                <img src="image-select-rooms/header.jpg" style="width: 100%">
            </div>
            <div class="col-lg-12" style="margin-top: 60px; text-align: center;">
                <label><h2>สมัครสมาชิกเรียบร้อย</h2></label><br>
                <label><button class="btn btn-primary" onclick="location.href='index.php'">กลับหน้าหลัก</button></label>
            </div>
            <div class="col-lg-12">
                <?php
                    include 'footer.php';
                ?>
            </div>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            </body>
            </html>
        <?php
    }
    else{
        echo "Insert Error".$Sql_insert;
    }

?>