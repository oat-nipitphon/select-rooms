<?php
      session_start();
      require_once ("connect.php");
      if(!isset($_SESSION['id'])){
        echo "Please Login!";
        exit();
      }
      $id_user = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="row">
    <div class="col-lg-12">
        <img src="image-select-rooms/header.png" style="width: 100%">
    </div>
    <div class="col-lg-12" style="text-align:center; margin-top: 30px;">
    <button type="button" class="btn btn-primary" onclick="location.href='insert-room.php'">
        เพิ่มห้องเรียน
    </button>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
    <table width="100%" border="1" style="margin-top: 30px; margin-bottom: 30px;">
        <tr style="text-align:center;">
        <td>ชื่อห้อง</td>
        <td>รหัสห้อง</td>
        <td>อาคาร</td>
        <!-- <td>สถานะ</td> -->
        <td>จัดการ</td>
        </tr>
        <?php
            $Sql_select_room = "SELECT * FROM class_room";
            $Obj_select_room = $conn->query($Sql_select_room);
            if($Obj_select_room->num_rows > 0){
                while($row = $Obj_select_room->fetch_assoc()){
                    $id_room = $row['id'];
                    ?>
                    <tr style="text-align:center;">
                    <td><?php echo $row['name_room'] ?></td>
                    <td><?php echo $row['code_room'] ?></td>
                    <td><?php echo $row['building_number'] ?></td>
                    <!-- <td><?php// echo $row['status_room'] ?></td> -->
                    <td style="text-align:center;"> 
                    <a href="room-control-edit.php?id=<?php echo $row['id']; ?>">
                    <img src="image-select-rooms/edit.png" style="width: 50px; height: 50px;">
                </a> 
                    
                    <a href="room-control-delect.php?id=<?php echo $row['id']; ?>">
                    <img src="image-select-rooms/delect.png" style="width: 40px; height: 40px;">
                </a> </td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
    </div>
    <div class="col-lg-2"></div>
    <div class="col-lg-12" style="text-align: center; margin-bottom: 30px;">
    <input type="submit" onclick="location.href='main.php'" class="btn btn-danger" value="กลับหน้าหลัก">
    </div>
    <?php
        include 'footer.php';
    ?>
</div>
</body>
</html>