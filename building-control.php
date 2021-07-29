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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>อาคารเรียน</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="col-lg-12">
        <img src="image-select-rooms/header.jpg" style="width: 100%">
    </div>
    <div class="col-lg-12" style="text-align:center; margin-top: 30px;">
    <button type="button" class="btn btn-primary" onclick="location.href='insert-building.php'">
        เพิ่มอาคารเรียน
    </button>
    </div>
   
        <div class="col-lg-2"></div>
    <div class="col-lg-8" style="margin-top: 30px; margin-bottom: 30px;">
        <table border="1" width="100%">
        <tr style="text-align: center;">
        <td>id</td>
        <td>ชื่อภาษาไทย</td>
        <td>ชื่อภาษาอังกฤษ</td>
        <td>สาขาวิชา</td>
        <td>คณะ</td>
        <td>จัดการ</td>
        </tr>
            <?php
                include 'connect.php';
                $Sql = "SELECT * FROM `class_building`";
                $Result = $conn->query($Sql);
                if($Result->num_rows > 0){
                    while($row = $Result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name_th']?></td>
                            <td><?php echo $row['name_en']?></td>
                            <td><?php echo $row['branch']?></td>
                            <td><?php echo $row['board']?></td>
                            <td style="text-align: center;"><a href="building-control-edit.php?id=<?php echo $row['id']; ?>">
                            <img src="image-select-rooms/edit.png" style="width: 50px; height: 50px;">
                        </a>
                            
                            <a href="building-control-delect.php?id=<?php echo $row['id']; ?>">
                            <img src="image-select-rooms/delect.png" style="width: 40px; height: 40px;">
                        </a></td>
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