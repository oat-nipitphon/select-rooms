<?php
  session_start();
  require_once ("connect.php");
  if(!isset($_SESSION['id'])){
    echo "Please Login!";
    exit();
  }
    $id = $_SESSION['id'];
    $status_user = $_SESSION['status_user'];
    // echo $_SESSION['id'].$status_user;
    $Sql_select_status = "SELECT * FROM table_user WHERE id='$id'";
    $result = $conn->query($Sql_select_status);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        // echo $row["username"]." ".$row["status_user"];
        // echo $_SESSION['status_user'];
      }
    }else{
        echo "Error".$Sql_select_status;
    }

  $conn->close();
  include 'connect.php';
  $id_user = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->
</head>
<body class="gray-bg">
<?php
  include 'headen.php';
?>
<div class="col-md-1"></div>
<div class="col-md-10">
    <div class="animated fadeInDown">
          <div class="col-md-12" style="background: #ffaa00;">
            <h4>
            <br> ยินดีต้อนรับ :: 
              <?php
                $Sql_user = "SELECT * FROM table_user WHERE id=".$id_user;
                $Req_user = mysqli_query($conn, $Sql_user);
                if($Req_user != null){
                  while($row_user = mysqli_fetch_array($Req_user)){
                    echo $row_user['full_name'];
                  }
                }  
              ?>
            <a href="logout.php">
            ออกจากระบบ
            </a>
          </h4>
          </div>
        <div class="col-md-12" style="text-align:right; background: #ffaa00;">
        <form action="search-room-main.php" method="POST">
              <input type="text" name="search" id="search" size="30"> 
              <button class="btn btn-info">ค้นหา</button>        
        </form>
        </div>
        <div class="col-lg-12" style="background: #99ff33; text-align:center;">
            <label for=""><h3>อาจารย์ / นักศึกษา</h3></label>
        </div>
        <?php
          if($status_user == "admin"){
             ?>
        <div class="col-md-12" style="background: #ccffff; text-align:center;">
        <a href="">
            <label><img src="image-select-rooms/admin.png" style="width: 150px; margin-top: 20px;"></label>
            <label><a href="report-user.php"><img src="image-select-rooms/edit.png" style="width: 50px; height: 50px;">
            บริหารจัดการผู้ใช้
            </a></label>
        </a>
        </div>
        <div class="col-lg-12" style="background: #ffff99; text-align:center;">
          <a href="report-room.php">
          <label for=""><img src="image-select-rooms/buildng.png" style="width: 150px; margin-top: 20px;"></label>
          <label for=""><a href="building-control.php"><img src="image-select-rooms/edit.png" style="width: 50px; height: 50px;">
          บริหารจัดการอาคารเรียน
          </a></label>
          </a>
          </div>
          <div class="col-lg-12" style="background: #ccff99; text-align:center;">
          <a href="report-room.php">
          <label for=""><img src="image-select-rooms/room.png" style="width: 150px; margin-top: 20px;"></label>
          <label for=""><a href="room-control.php"><img src="image-select-rooms/edit.png" style="width: 50px; height: 50px;">
          บริหารจัดการห้องเรียน
          </a></label>
          </a>
        </div>
            <?php
          }
        ?>
        <?php
          if($status_user != "admin"){
            ?>
          <div class="col-lg-12" style="background: #ccffff; text-align:center;">
          <a href="report-room.php">
            <label for=""><a href="profile-user.php?id=<?php echo $id_user ?>">
            <label><img src="image-select-rooms/admin.png" style="width: 150px; margin-top: 20px;"></label>
            <img src="image-select-rooms/edit.png" style="width: 50px; height: 50px;">
              ข้อมูลผู้ใช้
              </a></label>
              </a>
            </div>
            <?php
          }
        ?>
        <div class="col-lg-12" style="background:#c299ff; text-align:center;">
        <a href="">
            <label for=""><img src="image-select-rooms/std.png" style="width: 150px; margin-top: 20px;"></label>
            <label for=""><a href="select-rooms.php"><img src="image-select-rooms/edit.png" style="width: 50px; height: 50px;">
            บริหารจัดการ จอง - คืน
            </a></label>
        </a>
        </div>
        <div class="col-lg-12" style="background:#ffff66; text-align:center;">
        <a href="">
            <label for=""><img src="image-select-rooms/comment.png" style="width: 150px; margin-top: 20px;"></label>
            <label for=""><a href="comment-rooms.php"><img src="image-select-rooms/edit.png" style="width: 50px; height: 50px;">
            คอมเม้นห้อง
            </a></label>
        </a>
        </div>
        <div class="col-lg-12" style="background: #f7e6ff; text-align:center;">
        <a href="report-room.php">
            <label for=""><img src="image-select-rooms/list-select-room.png" style="width: 150px; margin-top: 20px;"></label>
            <label for=""><a href="report-room.php"><img src="image-select-rooms/edit.png" style="width: 50px; height: 50px;">
            ระบบรายงานการ จอง - คืน
            </a></label>
        </a>
        </div>
    </div>
</div>
<div class="col-md-1"></div>
<?php
  include 'footer.php';
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
