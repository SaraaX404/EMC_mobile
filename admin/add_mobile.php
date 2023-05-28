<?php

include '../config.php';

if ( isset($_POST['submit'])) {
 
  // collect value of input field
   
  $branch_name = $_POST ['branch_id'];
  $intBranch = (int)$branch_name;
  $image=$_POST ['image'];
  $name=$_POST ['name'];
  $brand=$_POST ['brand'];
   
  $sql = "INSERT INTO mobile(brand,name,image,branch_id) VALUES ( '$brand', '$name', null,' $intBranch')";
 
 if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
 } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
 }
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<body>
    <div style="padding:150px; padding-top:50px;">
    <p class="h2 pt-5 pb-3" >Device Details</p>
    <form action="add_mobile.php" method="POST">
  <div class="form-group mt-1">
    <label for="brand">Phone Brand</label>
    <input type="text" class="form-control" id="brand" placeholder="samsung" name="brand">
  </div>
  <div class="form-group mt-1">
    <label for="brand">Phone Name</label>
    <input type="text" class="form-control" id="brand" placeholder="M32" name="name">
  </div>
  <div class="form-group mt-1">
    <label for="brand">image</label>
    <input type="file" class="form-control" id="brand" placeholder="samsung" name="image">
  </div>
  <label for="exampleFormControlSelect1 mt-1">Branch</label>
    <select class="form-control" id="exampleFormControlSelect1" name='branch_id'>
      <option value="1">Matara</option>
      <option value="2">Galle</option>
      <option value="3">Hambanthota</option>
    </select>
    <button type="submit" name="submit" class="btn btn-primary mt-3" style="width:100%">Proceed</button>
</form>
    </div>

</body>
</html>