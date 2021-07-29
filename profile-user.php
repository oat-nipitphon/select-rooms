<?php
  session_start();
  require_once ("connect.php");
  if(!isset($_SESSION['id'])){
    echo "Please Login!";
    exit();
  }
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
</style>
<body>
    <div class="row">
        <div class="col-lg-12">
            <img src="image-select-rooms/header.jpg" style="width: 100%">
        </div>
        <div class="col-lg-12">
            <div class="row" style="background: #b2b266; text-align:center;">
                แก้ไขข้อมูล
            </div>
        </div>
    </div>

    <?php
        
        // if($id_edit_admin = $_GET['id']){
        //     $id = $id_edit_admin;
        // }else{
        //     $id = $_SESSION['id'];
        // }
        $id = $_GET['id'];
        $Sql_profile = "SELECT * FROM table_user WHERE id='$id'";
        $Result_profiles = mysqli_query($conn, $Sql_profile);

    ?>

    <div class="row">
    <div class="col-lg-2"></div>
        <div class="col-lg-8">
        <form action="update-user.php" method="POST">
        <center>
        <table border="0" width="100%" style="margin-top: 30px;">
        <?php
            while($Result_profile = mysqli_fetch_array($Result_profiles)){
        ?>
        <input type="hidden" name="id" value="<?php echo $Result_profile["id"]; ?>">
        <input type="hidden" name="status_user" value="<?php echo $Result_profile["status_user"]; ?>">
                <tr>
                    <td>เลขบัตรประชาชน</td>
                    <td><input class="form-control" type="text" name="card_number" value="<?php echo $Result_profile["card_number"];?>"></td>
                </tr>
                <tr>
                    <td>รหัสนักศึกษา</td>
                    <td><input class="form-control" type="text" name="code_number" value="<?php echo $Result_profile["code_number"];?>"></td>
                </tr>
                <tr>
                    <td>ชื่อ - นามสกุล</td>
                    <td><input class="form-control" type="text" name="full_name" value="<?php echo $Result_profile["full_name"];?>"></td>
                </tr>
                <tr>
                    <td>ชื่อผู้ใช้</td>
                    <td><input class="form-control" type="text" name="username" value="<?php echo $Result_profile["username"];?>"></td>
                </tr>
                <tr>
                    <td>รหัสผ่าน</td>
                    <td><input class="form-control" type="text" name="password" value="<?php echo $Result_profile["password"];?>"></td>
                </tr>
                <tr>
                    <td>เบอร์โทรศัพท์</td>
                    <td><input class="form-control" type="text" name="tel" value="<?php echo $Result_profile["tel"];?>"></td>
                </tr>
            <?php
                }
            ?>
            </table>
            </center>
            <div class="col-lg-12" style="text-align:center; margin-top: 30px;">
                <button type="submit" class="btn btn-success" name="btn_update">แก้ไขข้อมูล</button>
            </div>
        </form>
        <div class="col-lg-12" style="text-align:right; margin-top: 30px;">
                <button type="submit" onclick="location.href='main.php'" class="btn btn-danger" name="btn_update">กลับ</button>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <div class="row" style="margin-top: 30px;">
    <?php 
        include 'footer.php';
    ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>