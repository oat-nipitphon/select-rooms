<?php
  session_start();
  require_once ("connect.php");
  if(!isset($_SESSION['id'])){
    echo "Please Login!";
    exit();
  }
    include 'connect.php';

//     $Sql_all = "SELECT * FROM book_class";
//     $Result_all = $conn->query($Sql_all);
    
//     if($Result_all->num_rows > 0 ){
//         while($row = $Result_all->fetch_assoc()){
//             echo "book id" .$row["book_id"]. " " . "book_date" .$row["book_date"]."<br>"; 
//         }
//     }
//     else{
//         echo "Connect Error";
//     }

//     $conn->close();
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายงานการ จอง - คืน</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="row">
<div class="col-lg-12">
    <img src="image-select-rooms/header.png" style="width: 100%">   
</div>
<div class="col-lg-2"></div>
<div class="col-lg-8" style="margin-top: 30px; margin-bottom: 30px;">
    <?php
        $Sql_report_room = "SELECT * FROM report_select_room";
        $Req_report_room = $conn->query($Sql_report_room);
        if($Req_report_room->num_rows > 0){
            ?>
            <table border="1" width="100%">
            <tr style="text-align:center;">
            <td>id</td>
            <td>ผู้ใช้</td>
            <td>วัน / เดือน / ปี การจอง - คืน</td>
            <td>ชื่อห้อง</td>
            <td>รหัสห้อง</td>
            <td>อาคาร</td>
            </tr>
            <?php
            while($row_report_room = $Req_report_room->fetch_assoc()){
                $id_user = $row_report_room['id_user'];
                $id_room = $row_report_room['id_room'];
                $Sql_user = "SELECT * FROM table_user WHERE id=".$id_user;
                $Req_user = $conn->query($Sql_user);
                if($Req_user->num_rows > 0){
                    while($row_user = $Req_user->fetch_assoc()){
                        
                        $Sql_room = "SELECT * FROM class_room WHERE id=".$id_room;
                        $Req_room = $conn->query($Sql_room);
                        if($Req_room->num_rows > 0){
                            while($row_room = $Req_room->fetch_assoc()){
                               ?>
                               <tr>
                               <td><?php echo $row_report_room['id'];?></td>
                               <td><?php echo $row_user['full_name']; ?></td>
                               <td><?php echo $row_report_room['date']." เริ่มเวลา ".$row_report_room['time_start']." - ".$row_report_room['time_out']." น. "; ?></td>
                               <td><?php echo $row_room['name_room']; ?></td>
                               <td><?php echo $row_room['code_room']; ?></td>
                               <td><?php echo $row_room['building_number']; ?></td>
                               </tr>
                               <?php
                            }
                        }
                    }
                }
            }
        }
    ?>
            </table>
            <div class="col-lg-12" style="margin-top: 30px; margin-bottom:30px;text-align:right;">
                <input type="submit" class="btn btn-danger" onclick="location.href='main.php'" value="กลับ">
        </div>
</div>
<div class="col-lg-2"></div>
<div class="col-lg-12">
        <?php
            include 'footer.php';
        ?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>