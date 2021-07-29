<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>สมัครสมาชิก</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="col-lg-12">
    <div class="col-lg-12">
        <img src="image-select-rooms/header.jpg" style="width: 100%">
    </div>
    <div class="col-lg-12" style="background: #929090;text-align:center;">
      <label style="margin-top: 10px;"><font color="#141AFE"><b>ลงทะเบียน</b></font></label>
    </div>
    <div class="row">
    <div class="col-lg-2"></div>
        <div class="col-lg-8" style="margin-top: 50px;">
            <form action="insert-user.php" method="POST">
            <div class="form-group">
                <label for="">เลขบัตรประชาชน <font>*13 หลัก</font></label>
                <input type="text" class="form-control" name="cart_number" placeholder="xxxxx-xxxxx-xx-x" maxlength="13">
            </div>
            <div class="form-group">
                <label for="">สถานะภาพ</label>
                <select class="form-control" name="status_user">
                    <option value="admin">เลือกสถานะ</option>
                    <option value="teacher">อาจารย์</option>
                    <option value="student">นักศึกษา</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">รหัสนักศึกษา</label>
                <input type="text" class="form-control" name="code_number" placeholder="xxxxxxxxx-x" >
                <label for=""><font color="red">*อาจารย์ไม่ต้องใส่รหัสนักศึกษา</font></label>
            </div>
            <div class="form-group">
                <label for="">ชื่อ - นามสกุล</label>
                <input type="text" class="form-control" name="full_name" placeholder="xxxxxx xxxxx">
            </div>
            <div class="form-group">
                <label for="">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" name="tel" placeholder="xxx-xxx-xxxx">
            </div>
            <div class="form-group">
                <label for="">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" name="username" placeholder="xxxxxxxx">
            </div>
            <div class="form-group">
                <label for="">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password" placeholder="xxxxxxxx">
            </div>
            <button type="submit" class="btn btn-success">สมัครสมาชิก</button>
            </form>
        </div>
<div class="col-lg-2"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
