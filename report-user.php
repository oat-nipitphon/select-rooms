<?php
      session_start();
      require_once ("connect.php");
      if(!isset($_SESSION['id'])){
        echo "Please Login!";
        exit();
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลสมาชิก</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php
        include 'headen.php';
    ?>

<div class="col-lg-12">
    <div class="row">
    <div class="col-lg-12" style="text-align: center; margin-top: 30px;">
    <p><a href="register.php">
    <img src="image-select-rooms/add-1-icon.png" style="margin-right: 10px; width: 30px; height: 30px;">
    เพิ่มสมาชิก
    </a></p>
    </div>
        <div class="col-lg-12">
        <center>
        <table width="80%" style="margin-top: 40px;">
        <tr style="background: #88ff4d; font-size: 27px;">
            <td>id</td>
            <td>name</td>
            <td>เลขบัตรประชาชน</td>
            <td>username</td>
            <td>password</td>
            <td>level</td>
            <td>เบอร์โทร</td>
            <td>จัดการ</td>
        </tr>

        <?php
            include 'connect.php';
            $Sql = "SELECT * FROM table_user";
            $Obj = $conn->query($Sql);
            if($Obj->num_rows >0){
                while($Req = $Obj->fetch_assoc()){
                    ?>
                        <tr style="background: #bfff80; font-size: 20px;">
                            <td><?php echo $Req['id']; ?></td>
                            <td><?php echo $Req['full_name']; ?></td>
                            <td><?php echo $Req['card_number']; ?></td>
                            <td><?php echo $Req['username']; ?></td>
                            <td><?php echo $Req['password']; ?></td>
                            <td><?php echo $Req['status_user']; ?></td>
                            <td><?php echo $Req['tel']; ?></td>
                            <td>
                            <a href="profile-user.php?id=<?php echo $Req['id']; ?>">
                                <img src="image-select-rooms/edit.png" style="margin-left: 10px; width: 30px; height: 30px;">
                            </a>
                           <a href="config-delete-user.php?id=<?php echo $Req['id']; ?>">
                                <img src="image-select-rooms/delect.png" style="margin-left: 10px; width: 30px; height: 30px;">
                           </a>
                            </td>
                        </tr>
                    <?php
                }
            }
        ?>
        </table>
        </center>
        <div class="col-lg-10" style="text-align:right; margin-top: 30px;">
                <button type="submit" onclick="location.href='main.php'" class="btn btn-danger" name="btn_update">กลับ</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>