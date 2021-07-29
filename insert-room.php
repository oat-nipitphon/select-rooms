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
    <title>เพิ่มข้อมูลห้องเรียน</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
input[type=text], input[select] {
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
        <img src="image-select-rooms/header.png" style="width: 100%">
</div>
<div class="col-lg-2"></div>
<div class="col-lg-8">
<form action="config-insert-room.php" method="POST">
    <div class="col-lg-12">
      <label>ข้อมูลห้อง</label>
    </div>
    <div class="col-lg-12">
        <label>ชื่อห้อง</label>
        <input type="text" class="form-control" name="name_room">
    </div>
    <div class="col-lg-12">
        <label>รหัสห้อง</label>
        <input type="text" class="form-control" name="code_room">
    </div>
    <div class="col-lg-12">
        <label>อาคาร</label>
        <input type="text" class="form-control" name="building_number">
    </div>
    <div class="col-lg-12">
    <label for="sel1">สถานะ:</label>
        <select class="form-control" name="status_room">
            <option value="0">ว่าง</option>
            <option value="1">ไม่ว่าง</option>
            <option value="2">ปรับปรุง</option>
        </select>
    </div>
    <div class="col-lg-12" style="margin-top: 30px; text-align:center;">
      <input type="submit" class="btn btn-success" value="เพิ่ม">
    </div>
</form>
<div class="col-lg-12" style="margin-top: 30px; text-align:right; margin-bottom: 30px;">
<input type="submit" class="btn btn-danger" value="กลับ">
</div>
</div>
<div class="col-lg-2"></div>
</div>
<?php
    include 'footer.php';
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>