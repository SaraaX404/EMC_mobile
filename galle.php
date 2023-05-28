<!DOCTYPE html>
<html lang="en">
<?php include'head.php'?>
<?php include'config.php'?>
<body>
    <div style="padding:150px; padding-top:50px;">
    <select class="form-control mt-5 mb-5" id="exampleFormControlSelect1">
        
      <option>Matara</option>
      <option>Galle</option>
      <option>Hambanthota</option>
    </select>
    <?php
    $sql = "SELECT * FROM mobile WHERE branch_id = 2";
    $result = mysqli_query($conn, $sql);
  
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.d70cdHffTDV33-VyYfAjyAHaJo?pid=ImgDet&rs=1" alt="Card image cap" style="width:150px">
            <div class="card-body">
              <h5 class="card-title">'.$row['brand'].' - '.$row['name'].'</h5>
              <a href="#" class="btn btn-primary">Order Now</a>
            </div>
              </div>';
        }
    
   
    
    ?>


  
    </div>
</body>
</html>